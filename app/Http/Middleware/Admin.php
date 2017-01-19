<?php

namespace Cinema\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;
Use Session;
use Closure;

class Admin
{
    protected $auth;

    public function __construct(Guard $auth){
      $this->auth = $auth;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($this->auth->user()->id != 6){
          Session::flash('message-error','Lo sentimos, Usted no tiene permisos
          para Acceder a la aplicación');
          return redirect()->to('admin');
        }
        return $next($request);
    }
}
