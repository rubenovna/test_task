<?php

namespace app\services;

class Parser
{
    private $tutors = array();
    private $elements = null;
    private $parser;

    /**
     * Parser constructor.
     * @param $parser
     */
    public function __construct()
    {
        $this->parser = xml_parser_create();
        xml_set_element_handler($this->parser, array($this, 'startElement'), array($this, 'endElement'));
        xml_set_character_data_handler($this->parser, array($this, 'characterData'));
    }


    private function startElement($parser, $name, $attrs)
    {

        if (!empty($name)) {
            if ($name == "ITEM") {
                $this->tutors[] = array();
            }
            $this->elements = $name;
        }
    }


    private function endElement($parser, $name)
    {

        if (!empty($name)) {
            $this->elements = null;
        }
    }


    private function characterData($parser, $data)
    {
        if (!empty($data)) {
            if ($this->elements == 'CATEGORY' || $this->elements == 'VENDOR' || $this->elements == 'MODEL' || $this->elements == 'ID'
                ||$this->elements == 'PRICE' ||
                $this->elements == 'CURRENCY' || $this->elements == 'COMMENT' || $this->elements == 'WARRANTY'|| $this->elements == 'STOCKSTATUS') {
                $this->tutors[count($this->tutors) - 1][$this->elements] = trim($data);
            }
        }
    }


    public function parse($path)
    {

        if (!($handle = fopen($path, "r"))) {
            die("could not open XML input");
        }
        while ($data = fread($handle, 4096)) {

            xml_parse($this->parser, $data);
        }



        xml_parser_free($this->parser);
        /*var_dump($this->tutors);
        exit();*/
        return $this->tutors;
    }
}