<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class PerpusController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function showAll()
    {
        return response()->json([
            'code' => '200',
            'Message' => 'Get Data Success!',
            'Books' => Book::all()]);
    }

    public function showByID($id)
    {
        return response()->json([
            'code' => '200',
            'Message' => 'Get Data Success!',
            'Books' =>  Book::find($id)]);
    }

    public function create(Request $request)
    {
        $status = [];
        if(Book::create($request->json()->all())){
            $status = ['Response' => [
                'code' => '200',
                'Message' => 'Insert Success !'
            ]];
        }else{
            $status = ['Response' => [
                'code' => '201',
                'Message' => 'Insert Error , Check the Field !'
            ]];
        }
        return response()->json($status, 200);
    }

    public function update($id, Request $request)
    {
        $find = Book::find($id);
        $status = [];
        if($find){
            $find->update($request->json()->all());
            $status = ['Response' => [
                'code' => '200',
                'Message' => 'Update Success !'
            ]];
        }else{
            $status = ['Response' => [
                'code' => '201',
                'Message' => 'Update Error , Check the ID first !'
            ]];
        }
        return response()->json($status, 200);
    }

    public function delete($id)
    {
        $find = Book::find($id);
        $status = [];
        if($find){
            $find->delete();
            $status = ['Response' => [
                'code' => '200',
                'Message' => 'Delete Success !'
            ]];
        }else{
            $status = ['Response' => [
                'code' => '201',
                'Message' => 'Delete Error, Check the ID first !'
            ]];
        }
        return response()->json($status, 200);
    }

    //
}
