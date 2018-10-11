<?php
namespace rpman;

/**
 * Define function needed for implementation for Subject who is observed
 */
interface Observable
{
    /**
     * Attach new Observer
     *
     * @param Observer $observer_in
     * @return void
     */
    public function attach(Observer $observer_in);

    /**
     * Remove observer
     *
     * @param Observer $observer_in
     * @return void
     */
    public function detach(Observer $observer_in);

    /**
     * Notify about changes
     *
     * @return void
     */
    public function notify();
}
