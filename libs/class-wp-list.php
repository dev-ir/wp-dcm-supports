<?php
function list_table_page()
{
    $exampleListTable = new wpdcm_table();
    $exampleListTable->prepare_items();
    $exampleListTable->display();
}

class wpdcm_table extends WP_List_Table
{

    public function prepare_items()
    {

        if (!class_exists('WP_List_Table')) {
            require_once(ABSPATH . 'wp-admin/includes/class-wp-list-table.php');
        }

        $columns = $this->get_columns();
        $hidden = $this->get_hidden_columns();
        $sortable = $this->get_sortable_columns();

        $data = $this->table_data( $data );
        usort($data, array(&$this, 'sort_data'));

        $perPage = 2;
        $currentPage = $this->get_pagenum();
        $totalItems = count($data);

        $this->set_pagination_args(array(
            'total_items' => $totalItems,
            'per_page'    => $perPage
        ));

        $data = array_slice($data, (($currentPage - 1) * $perPage), $perPage);

        $this->_column_headers = array($columns, $hidden, $sortable);
        $this->items = $data;
    }

    public function get_columns()
    {
        $columns = array(
            'id'          => 'ID',
            'title'       => 'Title',
            'description' => 'Description',
        );
        return $columns;
    }

    public function get_hidden_columns()
    {
        return array();
    }

    public function get_sortable_columns()
    {
        return array('title' => array('title', false));
    }

    private function table_data( array $data)
    {
        return $data;
    }
    public function column_default($item, $column_name)
    {
        switch ($column_name) {
            case 'id':
            case 'title':
            case 'description':
            case 'year':
            case 'director':
            case 'rating':
                return $item[$column_name];

            default:
                return print_r($item, true);
        }
    }
    private function sort_data($a, $b)
    {
        $orderby    = 'title';
        $order      = 'asc';

        if (!empty($_GET['orderby'])) {
            $orderby = $_GET['orderby'];
        }
        if (!empty($_GET['order'])) {
            $order = $_GET['order'];
        }
        $result = strcmp($a[$orderby], $b[$orderby]);
        if ($order === 'asc') {
            return $result;
        }
        return -$result;
    }
}
?>