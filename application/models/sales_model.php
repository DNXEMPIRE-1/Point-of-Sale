<?php
class Sales_model extends CI_Model {
    public function insert_sales($records) {
        $this->load->database();

        $data = json_decode($records, true);
        $inserted = true;

        foreach ($data as $sale) {
            $item_price = trim($sale[3], '$');
            $sub_total = trim($sale[4], '$');
            $arr = array(
                'item_id' => $sale[0],
                'item_name' => $sale[1],
                'item_price' => $item_price,
                'quantity' => $sale[2],
                'sub_total' => $sub_total,
                'date' => date('Y-m-d'),
                'month' => date('m'),
                'year' => date('Y'),
                'week' => date('W')
            );

            $insert = $this->db->insert('sales', $arr);

            if (!$insert) {
                $inserted = false;
                break; // Stop inserting if an error occurs
            }
        }

        return $inserted;
    }

	public function updateStocks($cart) {
		$data = json_decode($cart,true);
		$this->load->database();
		foreach ($data as $stock) {
			$id = $stock[0];
			$quantity = $stock[2];
			$this->db->query("UPDATE items SET quantities = quantities - $quantity WHERE id = $id");
		}


	}
	public function daily_sales_report() {
		$date = date('Y-m-d');
		$this->load->database();
		$sql = $this->db->where('date',$date)->get('sales');
		return $sql->result();
	}

	public function weekly_sales_report() {
		$week = date('W');
		$year = date('Y');
		$this->load->database();
		$sql = $this->db->where('week',$week)->where('year',$year)->get('sales');
		return $sql->result();
	}

	public function monthly_sales_report() {
		$month = date('m');
		$year = date('Y');
		$this->load->database();
		$sql = $this->db->where('month',$month)->where('year',$year)->get('sales');
		return $sql->result();
	}

	public function yearly_sales_report() {
		$year= date('Y');
		$this->load->database();
		$sql = $this->db->where('year',$year)->get('sales');
		return $sql->result();
	}
}
?>