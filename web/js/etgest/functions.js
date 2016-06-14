function convertNumericMonthToName(month) {
    var months = [];
        months[1] = "January";
        months[2] = "February";
        months[3] = "March";
        months[4] = "April";
        months[5] = "May";
        months[6] = "June";
        months[7] = "July";
        months[8] = "August";
        months[9] = "September";
        months[10] = "October";
        months[11] = "November";
        months[12] = "December";

    if(month.match(/^0[0-9]$/g)) {
        months['01'] = "January";
        months['02'] = "February";
        months['03'] = "March";
        months['04'] = "April";
        months['05'] = "May";
        months['06'] = "June";
        months['07'] = "July";
        months['08'] = "August";
        months['09'] = "September";
        months['10'] = "October";
        months['11'] = "November";
        months['12'] = "December";
    } else {
        parseInt(month);
    }

    return months[month];
}

function arrayKeysSort(obj)
{
    var keys = [];

    for(var key in obj)
    {
        if(obj.hasOwnProperty(key))
        {
            keys.push(key);
        }
    }

    return keys;
}