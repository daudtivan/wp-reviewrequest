<?php

namespace EcovilaOlimpia;

use WPDesk\ShopMagic\Workflow\Event\Builtin\OrderCommonEvent;

class EventCheckIn extends OrderCommonEvent {

	/** Set name for your event */
	public function get_name(): string {
		return __( 'Event Check-in', 'event-checkin' );
	}

	/**
	 * Set a description for your event, which will be displayed when the event is selected in the automation.
	 */
	public function get_description(): string {
		return __( 'Customer checked in the event', 'event-checkin' );
	}

	/**
	 * Add hook for when the event should be triggered then initialize and run actions
	 */
	public function initialize(): void {
		add_action( 'fooevents_check_in_ticket', function ( $order ) {
			$this->resources->set( \WC_Order::class, $order );

			$this->trigger_automation();
		} );
	}
}
