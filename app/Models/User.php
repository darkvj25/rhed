<?php

namespace App\Models;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail, FilamentUser
{
    use  HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    const ROLE_ADMIN = 'admin';
    const ROLES = [
        self::ROLE_ADMIN => 'admin',
     ];
    public function canAccessPanel(Panel $panel): bool
    {
        return $this->is_admin();
    }
    public function is_admin() {
        return $this->role ===  self::ROLE_ADMIN;
    }

    protected $fillable = [
        'image',
        'id_number',
        'name',
        'first_name',
        'last_name',
        'gender',
        'position',
        'role',
        'course',
        'year',
        'block',
        'email',
        'department',
        'accept',
        'password',
        'reset_code',
    ];

    public function forum()
    {
        return $this->hasMany(Forum::class);
    }
    public function course()
    {
        return $this->hasOne(Course::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function like()
    {
        return $this->hasMany(Like::class);
    }
    public function reply(){
        return $this->hasMany(ReplyComment::class);
    }
    public function notification(){
        return $this->hasMany(Notification::class);
    }
    public function conversation(){
        return $this->hasMany(Conversation::class);
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
