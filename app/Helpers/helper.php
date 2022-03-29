<?php
use App\Models\User;
// ================================ New Accounts ===================================
function new_accounts(){
 $data=User::all()->count();
 return $data;
}
?>