<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class EditForm extends Form
{
    public $agenda;

    #[Validate('required', message: 'Tanggal terima tidak boleh kosong')]
    public $tanggal_terima;

    #[Validate('required', message: 'Tipe surat tidak boleh kosong')]
    public $tipe_surat = 'semua';

    #[Validate('required', message: 'Nomor surat tidak boleh kosong')]
    public $nomor_surat;

    #[Validate('required', message: 'Tanggal surat tidak boleh kosong')]
    public $tanggal_surat;

    #[Validate('required', message: 'Dari kepada tidak boleh kosong')]
    public $dari_kepada;

    #[Validate('required', message: 'Hal tidak boleh kosong')]
    public $hal;

    #[Validate('required', message: 'Keterangan tidak boleh kosong')]
    public $keterangan;

    #[Validate('required', message: 'Kode arsip tidak boleh kosong')]
    public $kode_arsip;

    public function update()
    {
        $this->validate();

        $this->agenda->update(
            $this->pull()
        );
    }
}
