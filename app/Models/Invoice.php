<?php
namespace App\Models; use Illuminate\Database\Eloquent\Model;
class Invoice extends Model { protected $fillable=['client_name','client_email','amount','status','due_date']; protected $casts=['amount'=>'decimal:2','due_date'=>'date']; }
