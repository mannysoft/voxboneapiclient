<?php
/*
 * APIv3SandboxLib
 *
 * This file was automatically generated by APIMATIC BETA v2.0 on 03/02/2015
 */

class CreditPackageModel {
    /**
     * The identifier of the credit package
     * @param int $creditPackageId public property
     */
    protected $creditPackageId;

    /**
     * The name of the credit package
     * @param string $name public property
     */
    protected $name;

    /**
     * The price of the credit package in cents
     * @param string $price100 public property
     */
    protected $price100;

    /**
	 * Constructor to set initial or default values of member properties
	 * @param   int $creditPackageId    Initialization value for the property $this->creditPackageId
	 * @param   string $name    Initialization value for the property $this->name
	 * @param   string $price100    Initialization value for the property $this->price100
	 */
    public function __construct()
    {
        if(3 == func_num_args())
        {
            $this->creditPackageId = func_get_arg(0);
            $this->name = func_get_arg(1);
            $this->price100 = func_get_arg(2);
        }
    }

    /**
     * Return a property of the response if it exists.
     * Possibilities include: code, raw_body, headers, body (if the response is json-decodable)
     * @return mixed
     */
    public function __get($property)
    {
        if (property_exists($this, $property)) {
            //UTF-8 is recommended for correct JSON serialization
            $value = $this->$property;
            if (is_string($value) && mb_detect_encoding($value, "UTF-8", TRUE) != "UTF-8") {
                return utf8_encode($value);
            }
            else {
                return $value;
            }
        }
    }
    
    /**
     * Set the properties of this object
     * @param string $property the property name
     * @param mixed $value the property value
     */
    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            //UTF-8 is recommended for correct JSON serialization
            if (is_string($value) && mb_detect_encoding($value, "UTF-8", TRUE) != "UTF-8") {
                $this->$property = utf8_encode($value);
            }
            else {
                $this->$property = $value;
            }
        }

        return $this;
    }

    /**
     * Encode this object to JSON
     */
    public function to_json()
    {
        $json = array();
        foreach($this as $key => $value) {
            $json[$key] = $value;
        }
        return $json;
    }
}