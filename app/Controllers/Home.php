<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            "judul" => "Dashboard",
            "page" => "v_dashboard",
        ];
        return view('v_template', $data);
    }
    public function viewMap(): string
    {
        $data = [
            "judul" => "View Map",
            "page" => "v_view_map",
        ];
        return view('v_template', $data);
    }
    public function baseMap(): string
    {
        $data = [
            "judul" => "Base Map",
            "page" => "v_base_map",
        ];
        return view('v_template', $data);
    }
    public function marker(): string
    {
        $data = [
            "judul" => "Marker",
            "page" => "v_marker",
        ];
        return view('v_template', $data);
    }
}
