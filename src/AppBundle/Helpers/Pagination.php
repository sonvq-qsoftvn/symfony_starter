<?php

namespace AppBundle\Helpers;

class Pagination
{
	//total items loaded from database
	protected $totalRows;

	//numper of items to show in one page
	protected $perPage;

	//number or current page
	protected $currentPage;

	//starting item number to be shown on page
	protected $offset;

	//total page
	protected $totalPage;

	//page range
	protected $range;

	//other query parameters
	protected $queryParams;

	public function __construct($totalRows, $perPage, $currentPage, $range = 10, $queryParams)
	{
		$this->totalRows = $totalRows;
		$this->perPage = $perPage;
		$this->currentPage = $currentPage;
		$this->totalPage = ceil($totalRows/$perPage);
		$this->offset = ($currentPage - 1) * $perPage;
		$this->range = $range;
		$this->queryParams = $queryParams;
	}

	//Returns HTML string with paginator elements - will be used from Controller
	 public function renderPaginator() 
	 {
		 $html = '<style type="text/css">';
		 $html .= '#etn-pagination ul li {';
		 $html .= 'display: inline-block;';
		 $html .= 'margin-right: 10px;';
		 $html .= '}';
		 $html .= '#etn-pagination form#paginator, #etn-pagination ul {';
		 $html .= 'display: inline-block;';
		 $html .= '}';
		 $html .= '#etn-pagination ul li.current {';
		 $html .= 'font-weight: normal';
		 $html .= '}';
		 $html .= '</style>';
		 //Insert all in one div tag
		 $html.= '<div id="etn-pagination">';
		 //We need this form for sumbitting limit into URL via GET call
		 $html.='<form id= "paginator" name="paginator" method="get" action="#" >';
		 //When limit is changed - just submit form
		 $html.= '<select name="perpage" id="perpage" class="pagesize input-mini" title="Select page size">';
		 $html.= '<option value="10" ';
		 if ($this->perPage == 10) {
		 $html.='selected';
		 } $html.='>10</option>';
		 $html.= '<option value="20" ';
		 if ($this->perPage == 20) {
		 $html.='selected';
		 } $html.='>20</option>';
		 $html.= '<option value="30" ';
		 if ($this->perPage == 30) {
		 $html.='selected';
		 } $html.='>30</option>';
		 $html.= '<option value="50" ';
		 if ($this->perPage == 50) {
		 $html.='selected';
		 } $html.='>50</option>';
		 $html.= '<option value="100" ';
		 if ($this->perPage == 100) {
		 $html.='selected';
		 } $html.='>100</option>';
		 $html.='</select>';
		 $html.='</form>';
		 $html.='<ul>';

		 //do ranged pagination only when total pages is greater than the range
        if($this->totalPage > $this->range){               
            $start = ($this->currentPage <= $this->range)?1:($this->currentPage - $this->range);
            $end   = ($this->totalPage - $this->currentPage >= $this->range)?($this->currentPage+$this->range): $this->totalPage;
        }else{
            $start = 1;
            $end   = $this->totalPage;
        }
		 
		 //Generate links for pages
        $cssClass = '';
        if($this->totalPage > 1) {
        	$html .= '<li><span class="pagedisplay">Page '.$this->currentPage.'/'.$this->totalPage.'</span></li>';

        	$html .= '<li><a href="' . $_SERVER['PHP_SELF'] . '?perpage=' . $this->perPage . '&amp;page=1&amp;'. $this->queryParams . '"1" class="first-btn btn" title="First"><i class="icon-step-backward glyphicon glyphicon-step-backward"></i></a></li>';

        	$html .= '<li><a href="' . $_SERVER['PHP_SELF'] . '?perpage=' . $this->perPage . '&amp;page=' . ($this->currentPage-1) . '&amp;'. $this->queryParams . '"' . ($this->currentPage-1) . '" class="previous-btn btn" title="Previous"><i class="icon-arrow-left glyphicon glyphicon-backward"></i></a></li>';
        }

		for($i = $start; $i <= $end; $i++){
			if($i==$this->currentPage) 
				$html.='<li class="'.$cssClass.'">' . $i . '</li>';
			else 
				$html.='<li class="'.$cssClass.'"><a href="' . $_SERVER['PHP_SELF'] . '?perpage=' . $this->perPage . '&amp;page=' . $i . '&amp;'. $this->queryParams . '">' . $i . '</a></li>';
		}

		if($this->totalPage > 1) {
			$html .= '<li><a href="' . $_SERVER['PHP_SELF'] . '?perpage=' . $this->perPage . '&amp;page=' . ($this->currentPage+1) . '&amp;'. $this->queryParams . '"' . ($this->currentPage+1) . '" class="next-btn btn" title="Next"><i class="icon-arrow-right glyphicon glyphicon-forward"></i></a></li>';

        	$html .= '<li><a href="' . $_SERVER['PHP_SELF'] . '?perpage=' . $this->perPage . '&amp;page=' . $this->totalPage . '&amp;'. $this->queryParams . '"' . $this->totalPage . '" class="last-btn btn" title="Last"><i class="icon-step-forward glyphicon glyphicon-step-forward"></i></a></li>';
        }

		$html.='</ul>';
		$html.= '</div>';
		 
		 return $html;
	 }

}