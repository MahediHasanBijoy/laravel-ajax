<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    //
     function getRequest($name = null) {
        echo "Hey {$name}";
    }

    function getJSON() {
        return array(
            'name' => 'john doe',
            'email' => 'john@doe.com'
        );
    }

    function getError($data) {
        if ($data == '1') {
            return array('message' => 'ok');
        }

        if ($data == 2) {
            return response(array('message' => 'not ok'), 400);
        }
    }

    function getHeader(Request $request) {
        return array(
            'message' => 'ok',
            'header' => $request->header('CustomHeader')
        );
    }

    function postRequest(Request $request) {
        $name = $request->get('name');
        return array('name' => $name);
    }

    function putRequest(Request $request, $id) {
        $name = $request->get('name');
        return array(
            'id' => $id,
            'name' => $name
        );
    }

    function patchRequest(Request $request, $id) {
        $name = $request->get('name');
        return array(
            'id' => $id,
            'name' => $name
        );
    }

    function deleteRequest(Request $request, $id) {
        return array(
            'id' => $id,
        );
    }
}
