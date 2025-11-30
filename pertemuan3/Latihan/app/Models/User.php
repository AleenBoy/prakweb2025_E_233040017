<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Kolom yang boleh diisi secara mass assignment
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',       // Nama lengkap user
        'username',   // Username unik untuk login
        'email',      // Email unik untuk login
        'password',   // Password yang akan di-hash otomatis
    ];

    /**
     * Kolom yang disembunyikan saat serialisasi (response JSON/Array)
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Tipe data casting untuk kolom tertentu
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed', // Otomatis hash password saat insert/update
    ];

    /**
     * Relasi: Satu user memiliki banyak posts (One-to-Many)
     *
     * @return HasMany
     */
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class, 'user_id', 'id');
        // 'user_id' adalah foreign key di tabel posts yang menunjuk ke users.id
    }
}