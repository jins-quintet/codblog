<?php
class Products extends CI_Controller {
    public function index()
	{
		echo 'Hello product pages';
	}
    public function shoes($sandals, $id)
    {
        echo $sandals;
        echo $id;
    }
}
?>