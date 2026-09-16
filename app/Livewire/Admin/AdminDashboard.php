<?php

namespace App\Livewire\Admin;

use App\Models\products;
use App\Models\User;
use Livewire\Attributes\Layout;
use App\Livewire\Actions\Logout;
use Livewire\Component;

class AdminDashboard extends Component
{
    public $find_id;
    public $producs;
    #[Layout('layouts.admin')]
    public function mount($id)
    {
        $this->find_id = User::find($id);
    }

    public function render()
    {
        $this->producs = products::all();
        return view('livewire.admin.admin-dashboard');
    }

    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}
