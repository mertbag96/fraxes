<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller {

    public function index() {

        return view('web.home');

    }

    public function women() {

        return view('web.women.index');

    }

    public function men() {

        return view('web.men.index');

    }

    public function child() {

        return view('web.child.index');

    }

    public function baby() {

        return view('web.baby.index');

    }

    public function search() {

        return view('web.search');

    }

    public function account() {

        return view('web.account');

    }

    public function auth($operation) {

        return view('web.auth.auth', compact('operation'));

    }

    public function basket() {

        return view('web.basket');

    }

    public function about() {

        return view('web.corporate.about');

    }

    public function contact() {

        return view('web.corporate.contact');

    }

    public function career() {

        return view('web.corporate.career');

    }

    public function hr() {

        return view('web.corporate.human-resources');

    }

    public function membership() {

        return view('web.infos.membership');

    }

    public function orderAndDelivery() {

        return view('web.infos.order-and-delivery');

    }

    public function exchangeAndReturnConditions() {

        return view('web.infos.exchange-and-return-conditions');

    }

    public function privacyAndSecurity() {

        return view('web.infos.privacy-and-security');

    }

    public function doSearch(Request $request) {

        dd($request->all());

    }

    public function newsletter(Request $request) {

        dd($request->all());

    }

    public function login(Request $request) {

        dd($request->all());

    }

    public function register(Request $request) {

        dd($request->all());

    }

}
