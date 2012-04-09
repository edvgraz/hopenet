<?php defined( '_HOPEEX' ) or die( 'Restricted access' ); ?>
<?php 

// html_table.class.php 
// version date: dec 2008  

class HTML_Table { 
     
    private $rows = array(); 
    private $tableStr = ''; 
     
    function __construct($id = NULL, $klass = NULL, $border = 0, $cellspacing = 2, $cellpadding = 0, $attr_ar = array() ) {
        $this->tableStr = "\n<table" . ( !empty($id)? " id=\"$id\"": '' ) .  
            ( !empty($klass)? " class=\"$klass\"": '' ) . $this->addAttribs( $attr_ar ) .  
             " border=\"$border\" cellspacing=\"$cellspacing\" cellpadding=\"$cellpadding\">\n";
    } 
     
    private function addAttribs( $attr_ar ) { 
        $str = ''; 
        foreach( $attr_ar as $key=>$val ) { 
            $str .= " $key=\"$val\""; 
        } 
        return $str; 
    } 
     
    public function addRow($klass = NULL, $attr_ar = array() ) { 
        $row = new HTML_TableRow( $klass, $attr_ar ); 
        array_push( $this->rows, $row ); 
    } 
     
    public function addCell($data = '', $klass = NULL, $type = 'data', $attr_ar = array() ) {
        $cell = new HTML_TableCell( $data, $klass, $type, $attr_ar ); 
        // add new cell to current row's list of cells 
        $curRow = &$this->rows[ count( $this->rows ) - 1 ]; // copy by reference 
        array_push( $curRow->cells, $cell ); 
    } 
     
    public function display() { 
        foreach( $this->rows as $row ) { 
            $this->tableStr .= !empty($row->klass) ? "  <tr class=\"$row->klass\"": "  <tr"; 
            $this->tableStr .= $this->addAttribs( $row->attr_ar ) . ">\n"; 
            $this->tableStr .= $this->getRowCells( $row->cells ); 
            $this->tableStr .= "  </tr>\n"; 
        } 
        $this->tableStr .= "</table>\n"; 
        return $this->tableStr; 
    } 
     
    function getRowCells($cells) { 
        $str = ''; 
        foreach( $cells as $cell ) { 
            $tag = ($cell->type == 'data')? 'td': 'th'; 
            $str .= !empty($cell->klass) ? "    <$tag class=\"$cell->klass\"": "    <$tag"; 
            $str .= $this->addAttribs( $cell->attr_ar ) . ">"; 
            $str .= $cell->data; 
            $str .= "</$tag>\n"; 
        } 
        return $str; 
    } 
     
} 


class HTML_TableRow { 
    function __construct($klass = NULL, $attr_ar = array()) { 
        $this->klass = $klass; 
        $this->attr_ar = $attr_ar; 
        $this->cells = array(); 
    } 
} 

class HTML_TableCell { 
    function __construct( $data, $klass, $type, $attr_ar ) { 
        $this->data = $data; 
        $this->klass = $klass; 
        $this->type = $type; 
        $this->attr_ar = $attr_ar; 
    } 
} 

?>