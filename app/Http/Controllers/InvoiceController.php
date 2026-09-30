<?php
namespace App\Http\Controllers; use App\Models\Invoice; use Illuminate\Http\Request;
class InvoiceController extends Controller { public function index(){return Invoice::latest()->get();} public function store(Request $r){return Invoice::create($r->validate(['client_name'=>'required|string|max:100','client_email'=>'required|email','amount'=>'required|numeric|min:0','status'=>'required|in:draft,sent,paid','due_date'=>'required|date']));} public function update(Request $r,Invoice $invoice){$invoice->update($r->validate(['status'=>'required|in:draft,sent,paid']));return $invoice;} }
