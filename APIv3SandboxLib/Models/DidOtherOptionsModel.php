<?php
/*
 * APIv3SandboxLib
 *
 * This file was automatically generated by APIMATIC BETA v2.0 on 03/02/2015
 */

class DidOtherOptionsModel {
    /**
     * A flag indicating if T38 is enabled for the DID
     * @param bool $t38Enabled public property
     */
    protected $t38Enabled;

    /**
     * The DID's DTMF mode
     * @param string $dtmf public property
     */
    protected $dtmf;

    /**
     * A flag indicating if the DTMF inband mute property is enabled
     * @param bool $dtmfInbandMute public property
     */
    protected $dtmfInbandMute;

    /**
     * The list of active codecs
     * @param array $codecs public property
     */
    protected $codecs;

    /**
	 * Constructor to set initial or default values of member properties
	 * @param   bool $t38Enabled    Initialization value for the property $this->t38Enabled
	 * @param   string $dtmf    Initialization value for the property $this->dtmf
	 * @param   bool $dtmfInbandMute    Initialization value for the property $this->dtmfInbandMute
	 * @param   array $codecs    Initialization value for the property $this->codecs
	 */
    public function __construct()
    {
        if(4 == func_num_args())
        {
            $this->t38Enabled = func_get_arg(0);
            $this->dtmf = func_get_arg(1);
            $this->dtmfInbandMute = func_get_arg(2);
            $this->codecs = func_get_arg(3);
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