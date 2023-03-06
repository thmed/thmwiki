<?php

namespace MediaWiki\Hook;

use Language;
use MWTimestamp;
use User;

/**
 * @stable to implement
 * @ingroup Hooks
 */
interface GetHumanTimestampHook {
	/**
	 * Use this hook to preemptively override the human-readable timestamp
	 * generated by MWTimestamp::getHumanTimestamp().
	 *
	 * @since 1.35
	 *
	 * @param string &$output Output timestamp
	 * @param MWTimestamp $timestamp Current (user-adjusted) timestamp
	 * @param MWTimestamp $relativeTo Relative (user-adjusted) timestamp
	 * @param User $user User whose preferences are being used to make timestamp
	 * @param Language $lang Language that will be used to render the timestamp
	 * @return bool|void True or no return value to continue, or false to use
	 *   the custom output
	 */
	public function onGetHumanTimestamp( &$output, $timestamp, $relativeTo, $user,
		$lang
	);
}