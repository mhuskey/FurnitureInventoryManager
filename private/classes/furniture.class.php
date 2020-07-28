<?php
  class Bicycle {
    public $manufacturer;
    public $item;
    public $stock;
    public $category;
    public $weight;
    public $cubes;
    public $price;
    
    protected $weight_lbs;
    
    public const CATEGORIES = [
      'Bedroom',
      'Dining Room',
      'Upholstery',
      'Recliner',
      'Occasional'
    ];
    
    public function __construct($args=[]) {
      $this->manufacturer = $args['manufacturer'] ?? '';
      $this->item         = $args['item']         ?? '';
      $this->stock        = $args['stock']        ?? '';
      $this->category     = $args['category']     ?? '';
      $this->weight       = $args['weight']       ?? '';
      $this->cubes        = $args['cubes']        ?? '';
      $this->price        = $args['price']        ?? 0;
      $this->weight_lbs   = $args['weight_lbs']   ?? 0.0;
    }
    
    public function weight_lbs() {
      return number_format($this->weight, 2) . ' lbs';
    }
    
    // public function set_weight_lbs($value) {
    //   $this->weight_lbs = floatval($value);
    // }
    
    public function weight_kgs() {
      $weight_lbs = floatval($this->weight_lbs) * 0.45359237;
      return number_format($weight_lbs, 2) . ' lbs';
    }
    
    // public function set_weight_kgs($value) {
    //   $this->weight_lbs = floatval($value) * 0.45359237;
    // }
  }
?>
