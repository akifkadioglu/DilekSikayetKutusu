<?php

namespace App\Http\Controllers;

use App\Models\Dilekmodel;
use Illuminate\Http\Request;

class DilekSikayetController extends Controller
{
    public function adddilek()
    {
        $this->validate(request(), [
            'subject' => 'required',
            'text' => 'required',
        ]);
        $data = new Dilekmodel();
        $data->subject = request('subject');
        $data->text = request('text');
        $data->address = request('address');
        $data->statu = false;
        $data->save();
        return redirect()->route('home')->with('message', 'Yazılanları incelenmek üzere sisteme gönderdik')->with('message_type', 'success');
    }
    public function duzenleform($id)
    {
        $data = Dilekmodel::where('id', $id)->first();
        return view('duzenle', ['data' => $data]);
    }
    public function duzenle($id)
    {
        $data = Dilekmodel::where('id', $id)->first();
        $data->note = request('note');
        $data->statu = request('statu');
        $data->save();
        return redirect()->route('home')->with('message', "$data->subject")->with('message_type', 'success');
    }
}
