<?php
namespace rpman\interfaces;

interface Observer
{
    /**
    * Receive update from subject
    * @param Observable $subject
    * @return void
    */
    public function update(Observable $subject);
}
