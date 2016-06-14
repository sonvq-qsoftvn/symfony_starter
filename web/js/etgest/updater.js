function updater(base_url ,pannello, versione){
	instance = this;

    this.pannello = pannello;

    this.isLocked = false;
    this.isEditingViaggio = false;
    this.isRefreshing = false;
    this.isEditingViaggio = false;

    this.url = '';

    this.folder = '';

    this.clienteLavorazione = '';
    this.viaggioLavorazione = '';
    this.moduloLavorazione = '';
    this.versione = versione;

    //Variabili interne
    this.stop = false;
    this.timerID = 0;
    this.timerNoteID = 0;
    this.timerFolderNoteID = 0;
    this.timerModificaPraticaID = 0;
    this.timerFolderModificaPraticaID = 0;

	this._getServizioUrl_v2 = function(cliente, viaggio, modulo, modo) {
        var url = base_url;
        url += '/cliente/' + cliente + '/' + viaggio + '/' + modulo + '/' + modo + '/prenotazioni';
        return url;
    }

    this._getDocumentoUrl_v2 = function(cliente, viaggio, modulo, modo) {
        var url = base_url;
        url += '/cliente/' + cliente + '/' + viaggio + '/doc/' + modulo + '/' + modo + '/prenotazioni';
        return url;
    }

    this._showDettaglio_v2 = function(cliente, viaggio, modulo, modo) {

        //... verifico se ho una pratica in lavorazione ...
        if (instance.isLocked){
            alert("Hai già una pratica in lavorazione: devi chiuderla prima di procedere.");
            return false;
        }

        //... verifico se la pratica è in lavorazione ...
        data = instance.isInWorking(modulo, 2);
        if ( data.length && (data[0].id > 0) ){
            if ( !confirm("La pratica è in lavorazione da " + data[0].nominativo + ". Vuoi procedere ugualmente") ){
                    return false;
            }
        }

        //... impongo il lock alla pratica ...
        instance.lock(modulo, 2);

        //Ricavo l'id del modulo
        var id_modulo = instance.moduloLavorazione.replace(',','_');

        jQuery('i#icona_lavorazione_'+id_modulo).addClass('fa fa-pencil');

        //Visualizzo il modulo e carico il contenuto nel frame
        if ( modulo.split(",").length == 2 ){
            tipoModulo = modulo.split(",")[0];
            modulo = modulo.split(",")[1];
        } else{
            switch(instance.pannello){
                case 'prenotazioni':
                    tipoModulo = 'servizio';
                    url = instance._getServizioUrl_v2(cliente, viaggio, modulo, modo);
                    break;
                case 'estratticonto':
                    tipoModulo = 'documento';
                    url = instance._getDocumentoUrl_v2(cliente, viaggio, modulo, modo);
                    break;
            }
        }

        var newElement = '<iframe marginWidth="0" marginHeight="0" src="' + url + '" frameBorder="0" width="100%" height="600"></iframe>';
        jQuery('#dettaglio_' + id_modulo).show().html(newElement);
        jQuery('#dettaglio_documento_' + id_modulo).show().html(newElement);
    }

    this._hideDettaglio = function(versione){
        var id_modulo = instance.moduloLavorazione.replace(',','_');

        //Nascondo il contenuto
        jQuery('#dettaglio_' + id_modulo).hide();

        //Cambio lo stile della colonna in lavorazione
        jQuery('i#icona_lavorazione_' + id_modulo).removeClass('fa').removeClass('fa-pencil');

        //Sblocco il modulo
        instance.unlock(versione);
    }

    this._setTimer = function(){
        instance.timerID = window.setTimeout(instance._refresh, 120 * 1000);
    }

    this._clearTimer = function(){
        if (instance.timerID){
            window.clearTimeout(instance.timerID);
        }
        instance.timerID = 0;
    }

    this._setTimerNote = function(){
        instance.timerNoteID = window.setTimeout(instance._refreshNote, 120 * 1000);
    }

    this._clearTimerNote = function(){
        if (instance.timerNoteID){
            window.clearTimeout(instance.timerNoteID);
        }
        instance.timerNoteID = 0;
    }

    this._setTimerFolderNote = function(){
        instance.timerFolderNoteID = window.setTimeout(instance._refreshFolderNote, 60 * 1000);
    }

    this._clearTimerFolderNote = function(){
        if (instance.timerFolderNoteID){
            window.clearTimeout(instance.timerFolderNoteID);
        }
        instance.timerFolderNoteID = 0;
    }

    if (2 === this.versione){
        this._clearTimerModificaPratica = function(){
            if (instance.timerModificaPraticaID){
                window.clearTimeout(instance.timerModificaPraticaID);
            }
            instance.timerModificaPraticaID = 0;
        }

        this._clearTimerFolderModificaPratica = function(){
            if (instance.timerFolderModificaPraticaID){
                window.clearTimeout(instance.timerFolderModificaPraticaID);
            }
            instance.timerFolderModificaPraticaID = 0;
        }
    }

    this._pause = function(){
        instance.stop = true;
        if (instance.timerID){ instance._clearTimer(); }
        if (instance.timerNoteID){ instance._clearTimerNote(); }
        if (instance.timerFolderNoteID){ instance._clearTimerFolderNote(); }

        if (2 === instance.versione){
            if (instance.timerModificaPraticaID){ instance._clearTimerModificaPratica(); }
            if (instance.timerFolderModificaPraticaID){ instance._clearTimerFolderModificaPratica(); }
        }
    }

    this._restore = function(){
        switch(instance.folder){
            case 'note':
                if (!instance.timerFolderNoteID){
                    instance._setTimerFolderNote();
                }
                break;
            case 'modificapratica':
                if (!instance.timerFolderModificaPraticaID){
                    instance._setTimerFolderModificaPratica();
                }
                break;
            default:
                if (!instance.timerID){
                    instance._setTimer();
                }
                if (!instance.timerNoteID){
                    instance._setTimerNote();
                }
                break;
        }
        instance.stop = false;
    }
}

updater.prototype.printDettaglio = function(cliente, viaggio, modulo, versione){

    if ( versione == 2 ){
        if ( modulo.split(",").length == 2 ){
            tipoModulo = modulo.split(",")[0];
            modulo = modulo.split(",")[1];
        }
        else{
            switch(instance.pannello){
                case 'prenotazioni':
                    tipoModulo = 'servizio';
                    break;
                case 'estratticonto':
                    tipoModulo = 'documento';
                    break;
            }    
        }

        if ( tipoModulo == 'servizio' ){
            url = instance._getServizioUrl_v2(cliente, viaggio, modulo, 'print');
        }
        else if ( tipoModulo == 'documento' ){
            url = instance._getDocumentoUrl_v2(cliente, viaggio, modulo, 'print');
        }

        var newWindow = window.open(
            url,
            'dettaglio_stampa',
            'location=0,menubar=0,resizable=0,scrollbars=0,status=0,titlebar=0,toolbar=0'
        );
    }

}

updater.prototype.showView = function(cliente, viaggio, modulo, versione = 2) {
    versione = parseInt(versione);

    switch(versione){
        case 1:
            instance._showDettaglio(cliente, viaggio, modulo, 'dv');
            break;
        case 2:
            instance._showDettaglio_v2(cliente, viaggio, modulo, 'show');
            break;
    }
}

updater.prototype.hideView = function(versione){

    if (null === versione) {
        versione = instance.versione;
    }

    instance._hideDettaglio(versione);
}

updater.prototype.showEdit = function(cliente, viaggio, modulo, versione){
    versione = parseInt(versione);

    switch(versione){
        case 1:
            instance._showDettaglio(cliente, viaggio, modulo, 'de');
            break;
        case 2:
            instance._showDettaglio_v2(cliente, viaggio, modulo, 'edit');
            break;
    }
}

updater.prototype.isInWorking = function(modulo, versione = 2) {

    var data = new Array();

    jQuery.ajax({
        type: "GET",
        url: instance.url,
        data: "d=" + modulo + "&pannello=" + instance.pannello + "&versione=" + versione,
        dataType: "json",
        async: false,
        success: function(json){
            data.push(json);
        }
    });

    return data;
}

updater.prototype.lock = function(modulo, versione){
    if (null !== modulo) {
        //Memorizzo il codice del modulo
        instance.moduloLavorazione = modulo;
    }

    if (null === versione) {
        versione = instance.versione;
    }


    //Blocco l'aggiornamento della pagina
    instance._pause();

    //Imposto il flag di lock
    instance.isLocked = true;

    //Imposto la pagina in lock
    jQuery.get(
        instance.url,
        { d: instance.moduloLavorazione, in_lavorazione: 1, pannello: instance.pannello, versione: versione }
    );
}

updater.prototype.unlock = function(versione){

    if (null === versione) {
        versione = instance.versione;
    }

    //Aggiornamento della pagina
    jQuery.get(
        instance.url,
        { d: instance.moduloLavorazione, in_lavorazione: 0, pannello: instance.pannello, versione: versione }
    );

    //Imposto il flag di lock
    instance.isLocked = false;

    //Elimino il riferimento al modulo in lavorazione
    instance.moduloLavorazione = '';

    //Sblocco l'aggiornamento della pagina
    instance._restore();
}

updater.prototype.hideEdit = function(versione){

    if (null === versione) {
        versione = instance.versione;
    }

    if ( !instance.isEditingViaggio ){
        instance._hideDettaglio(versione);
    } else{
        instance.hideEditViaggio(versione);
    }
}

updater.prototype.hideView = function(versione){

    if (null === versione) {
        versione = instance.versione;
    }

    instance._hideDettaglio(versione);
}

updater.prototype.lockViaggio = function(cliente, viaggio){
    //Blocco l'aggiornamento della pagina
    instance._pause();

    //Memorizzo i codice del viaggio
    instance.clienteLavorazione = cliente;
    instance.viaggioLavorazione = viaggio;

    //Imposto il flag di lock
    instance.isLocked = true;
    instance.isEditingViaggio = true;
}

updater.prototype.showEditViaggio_v2 = function(cliente, viaggio, modulo, modo, documentiViaggio){
    if (instance.isRefreshing){ return false; }

    if (instance.isLocked){
        alert("Hai già una pratica in lavorazione: devi chiuderla prima di procedere.");
        return false;
    }

    //Imposto il flag di lavorazione
    instance.lockViaggio(cliente, viaggio);
    instance.invioDocumenti = documentiViaggio;

    //Visualizzo il modulo e Carico il contenuto nel frame
    var newElement = '<iframe marginWidth="0" marginHeight="0" src="' + instance._getDocumentoUrl_v2(cliente, viaggio, modulo, modo) + '" frameBorder="0" width="100%" height="600"></iframe>';

    switch(instance.folder){
        case 'note':
            jQuery('#note_dettaglio_' + instance.viaggioLavorazione).show().html(newElement);
            break;
        default:
            jQuery('#dettaglio_' + instance.viaggioLavorazione).show().html(newElement);
            break;
    }
}

updater.prototype.loadNode = function(url, form_token, asset) {
    jQuery.ajax({
        url: url,
        dataType: "json",
        type: "POST",
        data: { pannello: 'estratticonto', versione: 2, form_token: form_token },
        success: function(result) {
            if(result.success) {
                var html = '';
                jQuery('#tabs-note-prenotazioni').html(html);

                html += '<table class="table table-striped">';

                for(var travel in result.listModules['viaggi']) {
                    html += '<thead>';
                    html += '<tr id="note_prenotazioni_cliente_' + result.listModules['viaggi'][travel].client.id + '">';
                    html += '<th align="left"><a href="cliente/' + result.listModules['viaggi'][travel].client.id + '" target="_blank">' + result.listModules['viaggi'][travel].client.cognome + ' ' + result.listModules['viaggi'][travel].client.nome + ' (' + result.listModules['viaggi'][travel].client.promotore + ') ' + '</a></th>';
                    html += '<th align="right"><a href="#top">Top</a></th>';
                    html += '</tr>';
                    html += '</thead>';

                    html += '<tbody>';
                    html += '<tr id="note_prenotazioni_viaggio_' + result.listModules['viaggi'][travel].id + '">';
                    html += '<td><a href="cliente/' + result.listModules['viaggi'][travel].client.id + '/' + result.listModules['viaggi'][travel].id + '">' + result.listModules['viaggi'][travel].id + '</a> ' + result.listModules['viaggi'][travel].descrizione + '</td>';
                    html += '<td><a href="#" onclick="showViaggioNuovaNota(\''+ result.listModules['viaggi'][travel].client.id +'\', ' + result.listModules['viaggi'][travel].id + ', ' + result.listModules['viaggi'][travel].versione + ')">Aggiungi nota/allegati</a></td>';
                    html += '</tr>';

                    html += '<tr id="note_dettaglio_' + result.listModules['viaggi'][travel].id + '"></tr>';

                    for(var mod in result.listModules['viaggi'][travel].module) {
                        var keyModule = 'documento_' + result.listModules['viaggi'][travel].module[mod].id,
                            idModule = 'document,' + result.listModules['viaggi'][travel].module[mod].id,
                            iconProcessing = 'libero';

                        html += '<tr id="prenotazioni_modulo_' + keyModule + '">';
                        html += '<td style="position:relative" id="descrizione_' + keyModule + '">';
                        html += '<i id="icona_lavorazione_' + result.listModules['viaggi'][travel].module[mod].id + '" class="" aria-hidden="true"></i>';
                        html += '<i class="fa fa-envelope-o" aria-hidden="true"></i>';
                        html += '<a class="attachment" id="' + result.listModules['viaggi'][travel].module[mod].id + '" href="#"><i class="fa fa-paperclip" aria-hidden="true"></i></a>';
                        html += '<div style="display:none; position:absolute; left:40px; top:0; z-index:9; padding:6px; min-width:250px;" id="allegati_dettaglio_' + keyModule + '" class="alert alert-info"><button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button><p style="display:inline-block; margin-right:5px"></p></div>';
                        html += result.listModules['viaggi'][travel].module[mod].data + ' ' + result.listModules['viaggi'][travel].module[mod].titolo;
                        html += '</td>';
                        html += '<td id="comandi_' + keyModule + '">';
                        html += '<a href="#" id="print_trigger_' + result.listModules['viaggi'][travel].client.id + '_' + result.listModules['viaggi'][travel].id + '_' + result.listModules['viaggi'][travel].module[mod].id + '" onclick="printDettaglio(\'' + result.listModules['viaggi'][travel].client.id +'\', \''+ result.listModules['viaggi'][travel].id +'\', \''+ result.listModules['viaggi'][travel].module[mod].id +'\', \'2\');"><i class="fa fa-print" aria-hidden="true"></i></a>';
                        html += '<a href="#" id="view_trigger_' + result.listModules['viaggi'][travel].client.id + '_' + result.listModules['viaggi'][travel].id + '_' + result.listModules['viaggi'][travel].module[mod].id + '" onclick="viewDettaglio(\'' + result.listModules['viaggi'][travel].client.id +'\', \''+ result.listModules['viaggi'][travel].id +'\', \''+ result.listModules['viaggi'][travel].module[mod].id +'\', \'2\');"><i class="fa fa-book" aria-hidden="true"></i></a>';
                        //html += '<a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>';
                        html += '</td>';
                        html += '</tr>';
                        html += '<tr style="display:none" id="dettaglio_documento_' + result.listModules['viaggi'][travel].module[mod].id + '"></tr>';
                    }
                    html += '</tbody>';
                }

                html += '</table>';

                jQuery('#tabs-note-prenotazioni').html(html);

                jQuery('a.attachment').click(function(e){
                    e.preventDefault();
                    var id = jQuery(this).attr('id');
                    console.log(id);
                    jQuery.ajax({
                        url: url,
                        dataType: "json",
                        type: "POST",
                        data: { id: id, versione: 2, form_token: form_token },
                        success: function(result) {
                            var html = '';
                            if(result.success) {
                                jQuery('#allegati_dettaglio_documento_' + id).show();
                                jQuery('#allegati_dettaglio_documento_' + id).find('p').html(html);

                                var basePath = asset;
                                if(result.attachments.length>0) {
                                    for(var i=0;i<result.attachments.length;i++) {
                                        html += '<a href="' + basePath + result.attachments[i].path + '">' + result.attachments[i].file + '</a>';
                                    }
                                } else {
                                    html += 'Nessun allegato caricato';
                                }

                                jQuery('#allegati_dettaglio_documento_' + id).find('p').html(html);
                                jQuery('#allegati_dettaglio_documento_' + id).find('button.close').click(function(e){
                                    e.preventDefault();
                                    jQuery(this).parent().hide();
                                });
                            }
                        }
                    });
                });

                //Imposto il tipo di scheda
                instance.folder = 'note';

                //Disabilito il refresh delle altre schede
                instance._clearTimer();
                instance._clearTimerNote();

                if (2 === instance.versione){
                    instance._clearTimerModificaPratica();
                }

                //Abilito il refresh della scheda note
                instance._setTimerFolderNote();
            }
        }
    });
}

updater.prototype.loadViaggi = function(url, form_token, asset) {
    jQuery.ajax({
        url: url,
        dataType: "json",
        type: "POST",
        data: { status: 'non_in_carico', inizializza: 1, versione: 2, form_token: form_token },
        success: function(result) {
            if(result.success) {
                        var html = '';
                        jQuery('#tabs-remote').html(html);

                        html += '<ol class="breadcrumb">';
                        for(var i=0; i<result.departures.length;i++) {
                            html += '<li class="dropdown"><button class="btn btn-default dropdown-toggle" type="button" id="filter' + result.departures[i].mese + result.departures[i].anno + '" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">' + result.departures[i].mese + ' ' + result.departures[i].anno + ' <span class="caret"></span></button>';
                            html += '<ul class="dropdown-menu" aria-labelledby="filter' + result.departures[i].mese + result.departures[i].anno + '">';
                            for(var j in result.departures[i].weeks) {
                                var $start = result.departures[i].weeks[j].start;
                                var $end = result.departures[i].weeks[j].end;

                                $start = $start.split('-');
                                $start[1] = convertNumericMonthToName($start[1]);
                                $end = $end.split('-');
                                $end[1] = convertNumericMonthToName($end[1]);

                                html += '<li><a href="#" class="filterweek" data-start="'+$start[2]+'" data-end="'+$end[2]+'" data-month="'+$end[1]+'" data-year="'+$end[0]+'">' + $start[2] + ' - ' + $end[2] + ' ' + $end[1] + '</a></li>';
                            }
                            html += '</ul></li>';
                        }
                        html += '<li><a href="#" class="filterweektotal">Tutti</a></li>';
                        html += '</ol>';

                        html += '<p class="information">Tutti</p>';

                        html += '<table class="table table-striped">';

                        for(var module in result.listModules) {
                            html += '<thead>';
                            html += '<tr id="prenotazioni_cliente_' + result.listModules[module].client.id + '">';
                            html += '<th colspan="2" align="left"><a href="cliente/' + result.listModules[module].client.id + '" target="_blank">' + result.listModules[module].client.cognome + ' ' + result.listModules[module].client.nome + ' (' + result.listModules[module].client.promotore + ') ' + '</a></th>';
                            html += '<th align="right"><a href="#top">Top</a></th>';
                            html += '</tr>';
                            html += '</thead>';

                            html += '<tbody>';
                            html += '<tr id="prenotazioni_viaggio_' + result.listModules[module].id + '">';
                            html += '<td colspan="2">' + result.listModules[module].id + ' ' + result.listModules[module].descrizione + '</td>';
                            html += '<td><a href="cliente/' + result.listModules[module].client.id + '/' + result.listModules[module].id +'" target="_blank">Vedi dettaglio</a></td>';
                            html += '</tr>';

                            for(var mod in result.listModules[module].module) {
                                html += '<tr id="prenotazioni_modulo_' + result.listModules[module].module[mod].id + '">';
                                html += '<td style="position:relative" id="descrizione_' + result.listModules[module].module[mod].id + '">';
                                html += '<i id="icona_lavorazione_' + result.listModules[module].module[mod].id + '" class="" aria-hidden="true"></i>';
                                html += '<i class="fa fa-envelope-o" aria-hidden="true"></i>';
                                html += '<a class="attachment" id="' + result.listModules[module].module[mod].id + '" href="#"><i class="fa fa-paperclip" aria-hidden="true"></i></a>';
                                html += '<div style="display:none; position:absolute; left:40px; top:0; z-index:9; padding:6px; min-width:250px;" id="allegati_dettaglio_' + result.listModules[module].module[mod].id + '" class="alert alert-info"><button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button><p style="display:inline-block; margin-right:5px"></p></div>';
                                html += result.listModules[module].module[mod].data + ' ' + result.listModules[module].module[mod].titolo;
                                html += '</td>';
                                html += '<td id="stato_' + result.listModules[module].module[mod].id + '"><a href="#">' + result.listModules[module].module[mod].stato_etichetta + '</a></td>';
                                html += '<td id="comandi_' + result.listModules[module].module[mod].id + '">';
                                html += '<a id="print_trigger_' + result.listModules[module].client.id + '_' + result.listModules[module].id + '_' + result.listModules[module].module[mod].id + '" href="#" onclick="printDettaglio(\'' + result.listModules[module].client.id +'\', \''+ result.listModules[module].id +'\', \''+ result.listModules[module].module[mod].id +'\', \'2\');"><i class="fa fa-print" aria-hidden="true"></i></a>';
                                html += '<a href="#" id="view_trigger_' + result.listModules[module].client.id + '_' + result.listModules[module].id + '_' + result.listModules[module].module[mod].id + '" onclick="viewDettaglio(\'' + result.listModules[module].client.id +'\', \''+ result.listModules[module].id +'\', \''+ result.listModules[module].module[mod].id +'\', \'2\');"><i class="fa fa-book" aria-hidden="true"></i></a>';
                                html += '<a href="#" id="edit_trigger_' + result.listModules[module].client.id + '_' + result.listModules[module].id + '_' + result.listModules[module].module[mod].id + '" onclick="editDettaglio(\'' + result.listModules[module].client.id +'\', \''+ result.listModules[module].id +'\', \''+ result.listModules[module].module[mod].id +'\', \'2\');"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>';
                                html += '</td>';
                                html += '</tr>';
                                html += '<tr style="display:none" id="dettaglio_' + result.listModules[module].module[mod].id + '"></tr>';
                            }
                            html += '</tbody>';
                        }

                        html += '</table>';

                        jQuery('#tabs-remote').html(html);

                        jQuery('a.attachment').click(function(e){
                            e.preventDefault();
                            var id = jQuery(this).attr('id');
                            console.log(id);
                            jQuery.ajax({
                                url: url,
                                dataType: "json",
                                type: "POST",
                                data: { id: id, versione: 2, form_token: form_token },
                                success: function(result) {
                                    var html = '';
                                    if(result.success) {
                                        jQuery('#allegati_dettaglio_' + id).show();
                                        jQuery('#allegati_dettaglio_' + id).find('p').html(html);

                                        var basePath = asset;
                                        if(result.attachments.length>0) {
                                            for(var i=0;i<result.attachments.length;i++) {
                                                html += '<a href="' + basePath + result.attachments[i].path + '">' + result.attachments[i].file + '</a>';
                                            }
                                        } else {
                                            html += 'Nessun allegato caricato';
                                        }

                                        jQuery('#allegati_dettaglio_' + id).find('p').html(html);
                                        jQuery('#allegati_dettaglio_' + id).find('button.close').click(function(e){
                                            e.preventDefault();
                                            jQuery(this).parent().hide();
                                        });
                                    }
                                }
                            });
                        });

                        jQuery('a.filterweek').click(function(e){
                            e.preventDefault();
                            var html = '';
                            jQuery('p.information').html(html);
                            html += 'Filter: ' + jQuery(this).text();
                            jQuery('p.information').html(html);

                            jQuery.ajax({
                                url: url,
                                dataType: "json",
                                type: "POST",
                                data: { status: 'non_in_carico', inizializza: 1, versione: 2, form_token: form_token, show: 'filter', month: jQuery(this).attr('data-month'), year: jQuery(this).attr('data-year'), date_start: jQuery(this).attr('data-start'), date_end: jQuery(this).attr('data-end') },
                                success: function(result) {
                                    if(result.success) {
                                        html = '';
                                        jQuery('.table.table-striped').html(html);

                                        for(var module in result.listModules) {
                                            html += '<thead>';
                                            html += '<tr id="prenotazioni_cliente_' + result.listModules[module].client.id + '">';
                                            html += '<th colspan="2" align="left"><a href="cliente/' + result.listModules[module].client.id + '" target="_blank">' + result.listModules[module].client.cognome + ' ' + result.listModules[module].client.nome + ' (' + result.listModules[module].client.promotore + ') ' + '</a></th>';
                                            html += '<th align="right"><a href="#top">Top</a></th>';
                                            html += '</tr>';
                                            html += '</thead>';

                                            html += '<tbody>';
                                            html += '<tr id="prenotazioni_viaggio_' + result.listModules[module].id + '">';
                                            html += '<td colspan="2">' + result.listModules[module].id + ' ' + result.listModules[module].descrizione + '</td>';
                                            html += '<td><a href="" target="_blank">Vedi dettaglio</a></td>';
                                            html += '</tr>';

                                            for(var mod in result.listModules[module].module) {
                                                html += '<tr id="prenotazioni_modulo_' + result.listModules[module].module[mod].id + '">';
                                                html += '<td style="position:relative" id="descrizione_' + result.listModules[module].module[mod].id + '">';
                                                html += '<i id="icona_lavorazione_' + result.listModules[module].module[mod].id + '" class="" aria-hidden="true"></i>';
                                                html += '<i class="fa fa-envelope-o" aria-hidden="true"></i>';
                                                html += '<a class="attachment" id="' + result.listModules[module].module[mod].id + '" href="#"><i class="fa fa-paperclip" aria-hidden="true"></i></a>';
                                                html += '<div style="display:none; position:absolute; left:40px; top:0; z-index:9; padding:6px; min-width:250px;" id="allegati_dettaglio_' + result.listModules[module].module[mod].id + '" class="alert alert-info"><button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button><p style="display:inline-block; margin-right:5px"></p></div>';
                                                html += result.listModules[module].module[mod].data + ' ' + result.listModules[module].module[mod].titolo;
                                                html += '</td>';
                                                html += '<td id="stato_' + result.listModules[module].module[mod].id + '"><a href="#">' + result.listModules[module].module[mod].stato_etichetta + '</a></td>';
                                                html += '<td id="comandi_' + result.listModules[module].module[mod].id + '">';
                                                html += '<a id="print_trigger_' + result.listModules[module].client.id + '_' + result.listModules[module].id + '_' + result.listModules[module].module[mod].id + '" href="#" onclick="printDettaglio(\'' + result.listModules[module].client.id +'\', \''+ result.listModules[module].id +'\', \''+ result.listModules[module].module[mod].id +'\', \'2\');"><i class="fa fa-print" aria-hidden="true"></i></a>';
                                                html += '<a href="#" id="view_trigger_' + result.listModules[module].client.id + '_' + result.listModules[module].id + '_' + result.listModules[module].module[mod].id + '" onclick="viewDettaglio(\'' + result.listModules[module].client.id +'\', \''+ result.listModules[module].id +'\', \''+ result.listModules[module].module[mod].id +'\', \'2\');"><i class="fa fa-book" aria-hidden="true"></i></a>';
                                                html += '<a href="#" id="edit_trigger_' + result.listModules[module].client.id + '_' + result.listModules[module].id + '_' + result.listModules[module].module[mod].id + '" onclick="editDettaglio(\'' + result.listModules[module].client.id +'\', \''+ result.listModules[module].id +'\', \''+ result.listModules[module].module[mod].id +'\', \'2\');"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>';
                                                html += '</td>';
                                                html += '</tr>';
                                                html += '<tr style="display:none" id="dettaglio_' + result.listModules[module].module[mod].id + '"></tr>';
                                            }
                                            html += '</tbody>';
                                        }

                                        jQuery('.table.table-striped').html(html);

                                        jQuery('a.attachment').click(function(e){
                                            e.preventDefault();
                                            var id = jQuery(this).attr('id');
                                            jQuery.ajax({
                                                url: url,
                                                dataType: "json",
                                                type: "POST",
                                                data: { id: id, versione: 2, form_token: form_token },
                                                success: function(result) {
                                                    var html = '';
                                                    if(result.success) {
                                                        jQuery('#allegati_dettaglio_' + id).show();
                                                        jQuery('#allegati_dettaglio_' + id).find('p').html(html);

                                                        var basePath = asset;
                                                        if(result.attachments.length>0) {
                                                            for(var i=0;i<result.attachments.length;i++) {
                                                                html += '<a href="' + basePath + result.attachments[i].path + '">' + result.attachments[i].file + '</a>';
                                                            }
                                                        } else {
                                                            html += 'Nessun allegato caricato';
                                                        }

                                                        jQuery('#allegati_dettaglio_' + id).find('p').html(html);
                                                        jQuery('#allegati_dettaglio_' + id).find('button.close').click(function(e){
                                                            e.preventDefault();
                                                            jQuery(this).parent().hide();
                                                        });
                                                    }
                                                }
                                            });
                                        });
                                    }
                                }
                            });
                        });

                        jQuery('a.filterweektotal').click(function(e){
                            e.preventDefault();
                            var html = '';
                            jQuery('p.information').html(html);
                            html += '{% trans %}'+ jQuery(this).text() +'{% endtrans %}';
                            jQuery('p.information').html(html);
                            jQuery.ajax({
                                url: url,
                                dataType: "json",
                                type: "POST",
                                data: { status: 'non_in_carico', inizializza: 1, versione: 2, form_token: form_token },
                                success: function(result) {
                                    if(result.success) {
                                        html = '';
                                        jQuery('.table.table-striped').html(html);

                                        for(var module in result.listModules) {
                                            html += '<thead>';
                                            html += '<tr id="prenotazioni_cliente_' + result.listModules[module].client.id + '">';
                                            html += '<th colspan="2" align="left"><a href="cliente/' + result.listModules[module].client.id + '" target="_blank">' + result.listModules[module].client.cognome + ' ' + result.listModules[module].client.nome + ' (' + result.listModules[module].client.promotore + ') ' + '</a></th>';
                                            html += '<th align="right"><a href="#top">Top</a></th>';
                                            html += '</tr>';
                                            html += '</thead>';

                                            html += '<tbody>';
                                            html += '<tr id="prenotazioni_viaggio_' + result.listModules[module].id + '">';
                                            html += '<td colspan="2">' + result.listModules[module].id + ' ' + result.listModules[module].descrizione + '</td>';
                                            html += '<td><a href="" target="_blank">Vedi dettaglio</a></td>';
                                            html += '</tr>';

                                            for(var mod in result.listModules[module].module) {
                                                html += '<tr id="prenotazioni_modulo_' + result.listModules[module].module[mod].id + '">';
                                                html += '<td style="position:relative" id="descrizione_' + result.listModules[module].module[mod].id + '">';
                                                html += '<i id="icona_lavorazione_' + result.listModules[module].module[mod].id + '" class="" aria-hidden="true"></i>';
                                                html += '<i class="fa fa-envelope-o" aria-hidden="true"></i>';
                                                html += '<a class="attachment" id="' + result.listModules[module].module[mod].id + '" href="#"><i class="fa fa-paperclip" aria-hidden="true"></i></a>';
                                                html += '<div style="display:none; position:absolute; left:40px; top:0; z-index:9; padding:6px; min-width:250px;" id="allegati_dettaglio_' + result.listModules[module].module[mod].id + '" class="alert alert-info"><button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button><p style="display:inline-block; margin-right:5px"></p></div>';
                                                html += result.listModules[module].module[mod].data + ' ' + result.listModules[module].module[mod].titolo;
                                                html += '</td>';
                                                html += '<td id="stato_' + result.listModules[module].module[mod].id + '"><a href="#">' + result.listModules[module].module[mod].stato_etichetta + '</a></td>';
                                                html += '<td id="comandi_' + result.listModules[module].module[mod].id + '">';
                                                html += '<a id="print_trigger_' + result.listModules[module].client.id + '_' + result.listModules[module].id + '_' + result.listModules[module].module[mod].id + '" href="#" onclick="printDettaglio(\'' + result.listModules[module].client.id +'\', \''+ result.listModules[module].id +'\', \''+ result.listModules[module].module[mod].id +'\', \'2\');"><i class="fa fa-print" aria-hidden="true"></i></a>';
                                                html += '<a href="#" id="view_trigger_' + result.listModules[module].client.id + '_' + result.listModules[module].id + '_' + result.listModules[module].module[mod].id + '" onclick="viewDettaglio(\'' + result.listModules[module].client.id +'\', \''+ result.listModules[module].id +'\', \''+ result.listModules[module].module[mod].id +'\', \'2\');"><i class="fa fa-book" aria-hidden="true"></i></a>';
                                                html += '<a href="#" id="edit_trigger_' + result.listModules[module].client.id + '_' + result.listModules[module].id + '_' + result.listModules[module].module[mod].id + '" onclick="editDettaglio(\'' + result.listModules[module].client.id +'\', \''+ result.listModules[module].id +'\', \''+ result.listModules[module].module[mod].id +'\', \'2\');"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>';
                                                html += '</td>';
                                                html += '</tr>';
                                                html += '<tr style="display:none" id="dettaglio_' + result.listModules[module].module[mod].id + '"></tr>';
                                            }
                                            html += '</tbody>';
                                        }

                                        jQuery('.table.table-striped').html(html);

                                        jQuery('a.attachment').click(function(e){
                                            e.preventDefault();
                                            var id = jQuery(this).attr('id');
                                            jQuery.ajax({
                                                url: url,
                                                dataType: "json",
                                                type: "POST",
                                                data: { id: id, versione: 2, form_token: form_token },
                                                success: function(result) {
                                                    var html = '';
                                                    if(result.success) {
                                                        jQuery('#allegati_dettaglio_' + id).show();
                                                        jQuery('#allegati_dettaglio_' + id).find('p').html(html);

                                                        var basePath = asset;
                                                        if(result.attachments.length>0) {
                                                            for(var i=0;i<result.attachments.length;i++) {
                                                                html += '<a href="' + basePath + result.attachments[i].path + '">' + result.attachments[i].file + '</a>';
                                                            }
                                                        } else {
                                                            html += 'Nessun allegato caricato';
                                                        }

                                                        jQuery('#allegati_dettaglio_' + id).find('p').html(html);
                                                        jQuery('#allegati_dettaglio_' + id).find('button.close').click(function(e){
                                                            e.preventDefault();
                                                            jQuery(this).parent().hide();
                                                        });
                                                    }
                                                }
                                            });
                                        });
                                    }
                                }
                            });
                        });
                    }
        }
    });
}