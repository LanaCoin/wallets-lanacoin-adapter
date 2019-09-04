<?php

/*
Plugin Name: LanaCoin Coin Adapter
Plugin URI: https://lanacoin.com/dashed-slug-adapter
Description: Example of how to add an RPC-compatible wallet to the Full Node Multi Coin Adapter for Bitcoin and Altcoin Wallets
Version: 0.1.0
Author: LanaCoin <lana@lanacoin.com>
Author URI: https://lanacoin.com
*/

function wallets_multiadapter_coins_filter( $coins ) {
	$coins['LANA'] = array( // replace XYZ with the coin's ticker symbol in this line

		// Coin symbol (again)
		'symbol' => 'LANA',

		// Coin name
		'name' => 'Lanacoin',

		// Default withdrawal fee (coin adapter settings override this)
		'wd fee' => '0.005',

		// Default internal transaction fee (coin adapter settings override this)
		'move fee' => '0.0005',

		// Default min confirmation count required for deposits (coin adapter settings override this)
		'confirms' => 12,

		// Default RPC port (coin adapter settings override this)
		'port number' => 5706,

		// Whether the wallet supports -walletnotify
		'tx notify' => 1,

		// Whether the wallet supports -blocknotify
		'block notify' => 1,

		// Whether the wallet supports -alertnotify (some wallets have deprecated this)
		'alert notify' => 0,

		// Comma separated list of hex bytes, needed for frontend validation of withdraw addresses. Leave blank for no validation.
		'versions' => '',

		// An sprintf() pattern for deposit address QR Code URI. If unsure, set to '%s'.
		'qr pattern' => 'lanacoin:%s',

		// An sprintf() pattern for displaying amounts. If unsure, leave to '%01.8f'.
		'amount pattern' => '%01.8f',

		// Default sprintf() pattern for URI to block explorer transaction page. Can be overriden with WordPress filter.
		'explorer tx uri' => 'http://chainz.cryptoid.info/lana/api.dws?q=txinfo',

		// Default sprintf() pattern for URI to block explorer address page. Can be overriden with WordPress filter.
		'explorer address uri' => 'http://chainz.cryptoid.info/lana/api.dws?q=getbalance',

		// URL to an 64x64 icon for the coin. Or leave empty to pull the icon from 'assets/sprites/SYMBOL.png'.
		'icon url' => 'https://chainz.cryptoid.info/logo/lana.png',
	);

	return $coins;
 }

add_filter( 'wallets_multiadapter_coins', 'wallets_multiadapter_coins_filter' );
