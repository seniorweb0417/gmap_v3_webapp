<?php
class Marker_model extends CI_Model {

    public $tbl = 'markers';
    public $content;
    public $date;

    public function saveMarker($username, $type, $lat, $lng, $phase, $subphase, $building, $apt, $floor, 
        $elevator, $over, $paid_amount, $remaining_balance, $remaining_years, $notes) {
        $data = array(
            'username' => $username,
            'type' => $type,
            'lat' => $lat,
            'lng' => $lng,
            'phase' => $phase,
            'subphase' =>  $subphase,
            'building' => $building,
            'apt' => $apt,
            'floor' => $floor,
            'elevator' => $elevator,
            'over_str' => $over,
            'paid_amount' => $paid_amount,
            'remaining_balance' => $remaining_balance,
            'remaining_years' => $remaining_years,
            'notes' => $notes
        );
        
        return $this->db->insert($this->tbl, $data);
    }

    public function loadMarker() {
        $ret = array();
        $query = $this->db->get($this->tbl);
        foreach ($query->result_array() as $row) {
            $ret[] = $row;
        }

        return $ret;
    }
}