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

    public function loadMarker($username, $type, $phase, $subphase, $building, $apt, $floor, 
        $elevator, $over, $paid_amount, $remaining_balance, $remaining_years) {
        $ret = array();
        
        if ($username != '') $this->db->like('username', $username);
        if ($type != '') $this->db->like('type', $type);
        if ($phase != '') $this->db->like('phase', $phase);
        if ($subphase != '') $this->db->like('phase', $subphase);
        if ($building != '') $this->db->like('building', $building);
        if ($apt != '') $this->db->like('apt', $apt);
        if ($floor != '') $this->db->like('floor', $floor);
        if ($elevator != '') $this->db->like('elevator', $elevator);
        if ($over != '') $this->db->like('over_str', $over);
        if ($paid_amount != '') $this->db->like('paid_amount', $paid_amount);
        if ($remaining_balance != '') $this->db->like('remaining_balance', $remaining_balance);
        if ($remaining_years != '') $this->db->like('remaining_years', $remaining_years);

        $query = $this->db->get($this->tbl);
        foreach ($query->result_array() as $row) {
            $ret[] = $row;
        }

        return $ret;
    }
}