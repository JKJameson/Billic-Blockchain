<?php
class Blockchain {
	public $settings = array(
		'description' => 'Accept Bitcoin payments though blockchain.info',
	);
	
	function payment_features() {
		return '<img src=" data:image/false;base64,iVBORw0KGgoAAAANSUhEUgAAAJ4AAAAhCAYAAAAoGRLbAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAANjDAADYwwGGeNeZAAAAB3RJTUUH4QMbDRoT7T/gnwAADiVJREFUeNrlnHu0VFUdxz/nzNzLHUBR3o4iKAi+E0F8AWZLM9ONjywNkzRNdOmYYWa21CwrtfI5piWID5S01MIfpolKKCrgq3wmggLJoAIiKMy9d+bO9MfZczl3e/aeM3Ova7Xwt9ZdcM75nd/e+3e++/fae49HDZTPpkcBhwMHA7sD2wFNQB5YBbwBzAfmpDK5l+kiUkr1AnbRfyN023sCZ4rI/C6QfzKwF7AOuE9ElvEFJKUUIoJSahvgZGAw8C5wp4hs6sq2vBhgSwATgSzQqwbZnwKTU5ncTC2HVCZXjzIGASssj9MisqoTit4OWBmhh++IyD1fUPAdCfw94tEwYKmIdEk7vgVslX/3B1qBu2oEHUBP4J58Nl3OZ9NjUplcu9waaaTtQb2gU0qhlGoAcpbJd/sXFHTbW0AHMK2rQGcFHuDls+kHgAUOnlpoYT6bnlon+A633L+73s5oBe7vYGnQwOwA1ogP1biFYe86x7NdurKhZIS187UlGNDFgzojn02PT2VyI2p87zjL/T90sj9frwLOQghgPpBQSg0HjtLvHgIs1S5oS6EjHc9WdGVDfti95rNprzbQlaFUhHI5bnvD89n0KzWY/p7A9pbHS6KsUA30H8ezGcb134EW4DXgag06gKe2MIv3luPZLZ8L8HTg/2Atls4fchhNmRzJkZOhmMcfNJZyoWrys1c+m54WJw4DvuxgWVNvzKFl328DtIhMqoBaW7sjLLHgY50E//8bfdvmXURkxudl8Q4AjnUbuDYobAz+BZKjzgMvQWnls3i9BtN4zH10m/gEtLVUa/f0fDY9wRXvaVAdann8lIi0dSbG0+WBnsBlwOu6DHQcMKJSVtC0tVuUbBGI02N+G9gJmA4sBh4C9heRs7t6giVDJZNnnJzFZrqdPA96DKS89g1Ky+fiD9gHgNK6JST3nBRgM/c8JLrFaXt6KpPrW4XHBrxrumLwIrIRuEL/dahlhWiQ5fWV+v0tgipj1jXM023Pu9riTayavfoNeNsOw+veF3/QeJJjfwZ+kJs0TphJ4ktBX9veeiBuzNcnn01fWCXLtZVSnvi8P0CIJltYH+pCa9NfKbWdjmlrDRnC1/20nEZXNl5NTq3PI/g9pZTnkuFpi/cxMep05dYNJAaMpPFkR0zd/BGFhb+l7V/TIFG12rAilckNtnR+PDDP8t6PgEnA3qF7zwNTRWRqhNUyFdAHuBAw3XV34AIRKYX4W4GGCFGzgahEyQOuFJFPIlxZ5f/HEawMfA3oESHjFeDPwF9EZLHFLaKz7DO0LHMGtwL3AjeKyIsunWiZewEnRTxaLSLXW8YxCjhQx+L7AEMj3l8FCEEd8PnK+14+mx4JvBTfOadoOmtJ+2XhyQvwB4zE32EsXq8hm0G6MUfL9NHgVV0c6ZPK5D6KUMS1wA/rMCAFYISIvOtQ8mHAnIhHH4jIwBBfb2BtHX3YSkQ+jQDKiRoMtVB3Eckb/W/SWeapMWXcJyInVbFS92jPZ9LvRORCg/c64Pw69HIncBpQ9oGv1vKm16Nj0lta+giFuRfRcvu+FOacG+JL03h0rAWAyyzu9oA6PVcD8I5eb7TRKZb75jLZDnW0Xw6DrlI0UEq9VgfoXowA3WCCtfFTa5BzolJqaRW3OdEWUoTfUUp1qxN0AN8FZooIPsGCf0yVlvAHjet4q2V9uyVse30mpdWvbg4L0wfGkXq0ZQ13n06GTh/qWCPq2STLO7MN/iPraPf3BlBSwCfAHnXIGmfIGgosq1MfOyulLohyt3o9HEd5KRym7NjJ73KSUuoQn2CnRzwqFUnu+d32y7a3H+qYSHgJ/H57bQZlIVbS1zNCEUOBVCcH2AAMMxWt1yNt9JbB/7062v2dYVlWAIlqU1r/mXXKvCHrrRhynH1TSnWLmIx7O5KtVUbiNaoL8qnTkwRbm+JR41Z4fXdrv0wMUyTO/iq0fEy59VO8Xh3zhMLDp8WR2hQR/E9y8D8JnEWwq6QM3AB838J7M6G1Xi17T4eSc0YcNdzCeiuw3vLh3wvFdA8DrpLR34AfAGv0ux4wQcs/tiJHy3rVAeAXCYrcm3R14ilgXwvv3iLyvHHPFm7dFQUaC+9VwJU6YSvphGeqhXd8shbL4m9rLEsW89DQHZID8UK5WXnTagr/OJvSh6/ESS4SZjlDKfU12wcXkclhKyAiZyqluuuBmnSYUsoTkXJItk3JMwyA7u4A6ORq5QedJbrWg7evAD0EVETk3nAsqPvyDceEuUhEfmPoZJRS6kOgXwT/BRHZ6/GOCfYZnToSmA2h8UxTSu0E/DRq7D7QHDe+8waGrGy5TPMtQ2ieuhutDx4PG9/f7HFTvfEHjY8DOiJKGgA7W3ivDAO08rEIKu3WDNO4PsHCN81wKaMtfHNj1gLvdoy3V9i6hoq3WEowN1tkLayALqwTTbb2jzDa6OFIot4xEotdXWFKRC10uquAHGNPWxnaWknsuvmblVb8E/wGaNlAKbeQ5ql7UFr+ZHuslxx9Hl5jrHpos6GIpMU9tYjIMjM+0YN8wxUghGR3dwTH5qaDb9ZgBSJdms1CARviCNATqz/QPyriBg60bNeCYENDFG1j8B3i6MIHxmSwJXzLzOxbk602/IFf5aPhde9LcsyP8IcdhR+yeMUXrjfqe020vd6xGuEPi1Xx/sS4PsPCtzbKKmiqmsVoJY9zsLxvyLa5lEUxKv22csMmEbmmxuWnGy3354tIOUqWvvdJTMv8ZcvjeeFCuibbWv4f4ljXEL3p41qjLZdJHnwpyTFTaDz6rg73adkQbBYoNgebAop5EiM6hgrlNa/FmthGHc8GvIWOD+6q2bWGlDw+jpKVUq7Sx6oYwDnTcv+/tSBOj/cYm+W16UPft7mbNcb1Vyx8UevhtjBllqUv37HwP+sDj9nLJwXAo7x+WcdM3fNonDiXpsz7dPveyzR+61Gazl+LP/SoDolHKbcojn6vNOp4gy18WUsNCoKDOnEsqm03s7nz9iAL3wqLSzGpn+X+v2tc9/QcmewDtgmg79sy8qeNa1t5ZJ4R3w129OWDiPi0wZGgzfdTmdxLVleVaKQw5zxa7tiP5uu2pTj/F5uzWQ1Eb+sd8bcbjbldrfjCDZCsmjAvT2Vyq417vS3KnOtQss0FPFPJaDXtZ+F7ygDEV2ICtGpcaY63RjdrBZ6IVEsKbWHF3SFwjHXF3kZfxztc9roIY+Ba9XnOr+Ia2gFIohFvmyGB73rwGzTfODBwucV84HaLeSjmKefX0jrrWxRfyMZR7C1hN6uUOoLoXTLvOlwKjjreT0K8rmWUjYaSbR/tTzEtlvUsSx372qJKAy1VSjlgX5GaE+rDBFtIICKtMV3yTRZjsLtD9qdJfexwZj6bdh/naysEWW2pQGnlcySGHwOeR3HRtRRfvAm8ms8ErU5lclcb935YLVWPyPpuc7TxQkjJRzvcp6lk2+pGPubYbCsI+3XRvrZuVTLhbMxJZpuMv424Z6t/2tqyFZrvBfBD8ZV7Ub6hB8WXb6W8bgkkGkiOPi/A4+K/1QO6z3SsyiydEbH3DKXUBOzLWteLSHOotnVwnCBaKdXPNf1iAsdmkXarQ08li2Xb3WLtegHnWmSdZWSqo+KUjJRSW/HZbVftyZbFitsOaT3a7hK01VsI3OaaxMUFV9My81DwG2h9LEPxuasoN39UD+impzI5iXCZTZZZPNNYqAY4G5jl+FhTTGtj4TXPf/Rx9Lt3lQy03Ypa2PorpS6P4HdZzmI1qxRyr662iyLyx9BZkp2IXrVqBVpDfACqhjAFpdQQB/+bHeKHykn/fDa9mLhnKMtt4CVqAVwZWJDK5A4yf1lAKTUMeNtSvxuhs9OttcucUiWT3V9EFoVk7wgsj+AraLCXQsC28VY+yjUEe/nadL++TrD8NSbU3lEEG0Vt9Kye5Iu129yDYCfMOGCIiKwJffS3sR+hfFjHWC0E25pOJeLIaqVbIjI7JPcy4OcRfOuBbcJgUkrdRfRWskdF5MiISWgbf1lE/A5BcOWwdSqTG06VovLmsDdRq6VbAIyz/JzFFMs7fXTtqQVYTXDK3wW6S0VkkTFjbfWkTWHQaeu6okq2ejHBRoV52iUdC+xqWOiHgY8dcg7SwHsaeJxgo0NlN/LQmBk7BGd8H9H9OcMBusdFZHZoLRfsW76mR4QTYyy8v3H0K4puj8y+KmBIZXJ70ImT+ha6I5XJHQS0Wfbfnd4FbVwuIr8MKbceJUOwVbsW6h7hdk+tcwxDw3JE5HVtGeull0Xk8Iit7zvHiXk1jbCEM/MsIcOJFtl3Vkv7SWVypxCsV67rJBg+BFQqkzvN9sM9egtSZ34OYhNwvIj83PLcFjpca4nVptTY/md22IjILO3OaqVhRoaKiFRCjVrpARHZ1wSdPojT31K7W2kUjm3Wq6hdp6m/bR2x8NKqwNN0fyqT6w1cQvALA7XQe8DFqUxuQCqTmx22qLbShyOQdgFuhoj0AP7q4Is6pF4QkfeiNh2IyBKd8W2I2xEdG5qyrtAxYC3nNvpElEcQka2Bf8UtVQHHicgJlkM+tm1d68PeQtMpjjJUOWLSutbD2wGQdPU+BJRfpTK5X+Wz6d7A5TpVbtIxSRPBDpONGgizgCtSmdzqGn6gp1lE9tOdP1QXhMdq2Sn9r6/lbwLeB64SkT8Z8VAUIHYGMhFlibzrPeAlEemllDqH4IzBVlpfnk4sCjpDu6HKqe5HRKSvLv38mmA5raceVyvBz7m1EGwKvcRcBTDAN1JvTZqmrXgPLSev9b8c+LGI/NOI56IAcE6UsYgA6oNE/1THAks/V1lkrw4D9X9+c63X+x+efAAAAABJRU5ErkJggg==">';	
	}
	
	function payment_button($params) {
	    global $billic, $db;
	    if (get_config('bitcoin_blockchain_xpub')=='') {
			return false;
	    }
	    return 'Pay using Bitcoin';
	}
	
	function payment_page($params) {
		global $billic, $db;
		if (get_config('bitcoin_blockchain_xpub')=='') {
			return 'Bitcoin is not enabled';
		}
		$html = '';
		if ($billic->user['verified']==0 && get_config('bitcoin_require_verification')==1) {
			return 'verify';
		} else {
			$tmp = @json_decode($params['invoice']['tmp'], true);
			if (is_array($tmp) && $tmp['time']>(time()-86400)) {
				$html .= '<br>Please send <b>'.$tmp['btc'].'</b> BTC to <b>'.$tmp['address'].'</b><br>';
			} else {
			
				$exchange = get_config('bitcoin_blockchain_exchange');
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_HEADER, false);
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
				curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true); 
				switch($exchange) {
					case 'blockchain.info':
					default:
						curl_setopt($ch, CURLOPT_URL, 'https://blockchain.info/tobtc?currency='.get_config('billic_currency_code').'&value='.$params['charge']);
						$btc = curl_exec($ch);
						$btc = trim($btc);
						break;
				}
				if (!$btc || !is_numeric($btc) || $btc<=0) {
					err('Failed to get Bitcoin exchange rate. Please try again later. If the problem persists please contact support.');
				}
				
				$secret = $billic->rand_str(20);
				$my_callback_url = 'http'.(get_config('billic_ssl')==1?'s':'').'://'.get_config('billic_domain').'/Gateway/Blockchain/invoice/'.$params['invoice']['id'].'/secret/'.$secret.'/';
				curl_setopt($ch, CURLOPT_URL, 'https://api.blockchain.info/v2/receive?xpub='.get_config('bitcoin_blockchain_xpub').'&callback='.urlencode($my_callback_url).'&key='.get_config('bitcoin_blockchain_apikey'));
				$response = curl_exec($ch);
				$response = trim($response);
				$object = json_decode($response, true);
				if (empty($object['address'])) {
					err('Failed to get Bitcoin address. Please try again later. If the problem persists please contact support.');
				}
				$html .= '<br>Please send <b>'.$btc.'</b> BTC to <b>'.$object['address'].'</b><br>';
				
				$db->q('UPDATE `invoices` SET `tmp` = ? WHERE `id` = ?', json_encode(array('address' => $object['address'], 'btc' => $btc, 'charge' => $params['charge'], 'secret' => $secret, 'time' => time())), $params['invoice']['id']);
			}
		}
		return $html;
	}
	function payment_callback() {
		global $billic, $db;
		$tmp = $db->q('SELECT `tmp`, `status` FROM `invoices` WHERE `id` = ?', $_GET['invoice']);
		if (empty($tmp)) {
			return 'Invoice "'.$_GET['invoice'].'" does not exist';
		}
		if ($tmp[0]['status']!='Unpaid') {
			echo '*ok*';
			return true;
		}
		$tmp = $tmp[0]['tmp'];
		$tmp = json_decode($tmp, true);
		if (empty($tmp['charge'])) {
			return 'TMP data for invoice "'.$_GET['invoice'].'" has expired';
		}
		
		if ($_GET['secret']!=$tmp['secret']) {
			return 'Invalid secret';
		}
		
		if ($_GET['test']==true) {
			return 'Test transaction';
		}
		
		if ($_GET['confirmations']<get_config('bitcoin_blockchain_confirmations')) {
			return 'Not enough confirmations yet';
		}
		
		$value_in_btc = ($_GET['value']/100000000);
		if ($value_in_btc < $tmp['btc'] && (100/$tmp['btc'])*$value_in_btc<97) {
			return 'Invalid BTC sent';
		}
		
		echo '*ok*';

		$billic->module('Invoices');
		return $billic->modules['Invoices']->addpayment(array(
			'gateway' => 'Blockchain',
			'invoiceid' => $_GET['invoice'],
			'amount' => $tmp['charge'],
			'currency' => get_config('billic_currency_code'),
			'transactionid' => $_GET['transaction_hash'],
		));
	}
	
	function settings($array) {
		global $billic, $db;
		if (empty($_POST['update'])) {
			echo '<form method="POST"><input type="hidden" name="billic_ajax_module" value="Blockchain"><table class="table table-striped">';
			echo '<tr><th>Setting</th><th>Value</th></tr>';
			echo '<tr><td>Require Verification</td><td><input type="checkbox" name="bitcoin_require_verification" value="1"'.(get_config('bitcoin_require_verification')==1?' checked':'').'></td></tr>';
			echo '<tr><td>blockchain.info xPub</td><td><input type="text" class="form-control" name="bitcoin_blockchain_xpub" value="'.safe(get_config('bitcoin_blockchain_xpub')).'"></td></tr>';
			echo '<tr><td>blockchain.info API Key</td><td><input type="text" class="form-control" name="bitcoin_blockchain_apikey" value="'.safe(get_config('bitcoin_blockchain_apikey')).'"></td></tr>';			
			echo '<tr><td>Bitcoin Exchange Rate</td><td><select class="form-control" name="bitcoin_blockchain_exchange"><option value="blockchain.info"'.(get_config('bitcoin_blockchain_exchange')=='blockchain.info'?' selected':'').'>blockchain.info</option></select></td></tr>';
			echo '<tr><td>Required Confirmations</td><td><input type="text" class="form-control" name="bitcoin_blockchain_confirmations" value="'.safe(get_config('bitcoin_blockchain_confirmations')).'"></td></tr>';
			echo '<tr><td colspan="2" align="center"><input type="submit" class="btn btn-default" name="update" value="Update &raquo;"></td></tr>';
			echo '</table></form>';
		} else {
			if (empty($billic->errors)) {
				set_config('bitcoin_require_verification', $_POST['bitcoin_require_verification']);
				set_config('bitcoin_blockchain_xpub', $_POST['bitcoin_blockchain_xpub']);
				set_config('bitcoin_blockchain_apikey', $_POST['bitcoin_blockchain_apikey']);
				set_config('bitcoin_blockchain_exchange', $_POST['bitcoin_blockchain_exchange']);
				set_config('bitcoin_blockchain_confirmations', $_POST['bitcoin_blockchain_confirmations']);
				$billic->status = 'updated';
			}	
		}
	}
}
