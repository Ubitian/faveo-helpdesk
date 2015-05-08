<?php
namespace App\Http\Requests;
use App\Http\Requests\Request;

/**
 * CheckTicket
 *
 * @package Request
 * @author  Ladybird <info@ladybirdweb.com>
 */
class CheckTicket extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		return [
			'email' => 'required|email',
			'ticket_number' => 'required',
		];
	}

}
