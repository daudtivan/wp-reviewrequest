/**
 * @param \WPDesk\ShopMagic\Workflow\Event\Event[] $hashmap Hashmap with built in events.
 *
 * @return \WPDesk\ShopMagic\Workflow\Event\Event[] Hashmap with appended event.
 * 
 * as described in https://docs.shopmagic.app/article/175-adding-custom-events
 */

function integrate_custom_shopmagic_event( array $hashmap ) {
    
    $hashmap['event_checkin'] = new \EcovilaOlimpia\EventCheckIn();
    return $hashmap;
}

add_filter('shopmagic/core/events', 'integrate_custom_shopmagic_event');
