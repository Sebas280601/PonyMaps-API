@extends('navigation-menu')
<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}

    <x-jet-button wire:click="$set('abrir',true)" >
           Importar excel
        </x-jet-button>


        <x-jet-dialog-modal wire:model="abrir">
        
        
            <x-slot name="title">
                Delete Account
            </x-slot>
        
            <x-slot name="content">
                Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted.
            </x-slot>
        
            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                    Nevermind
                </x-jet-secondary-button>
        
                <x-jet-danger-button class="ml-2" wire:click="deleteUser" wire:loading.attr="disabled">
                    Delete Account
                </x-jet-danger-button>
            </x-slot>
          
        </x-jet-dialog-modal>
    
</div>


