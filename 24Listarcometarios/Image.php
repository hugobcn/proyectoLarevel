/app/


// Relación One To Many / de uno a muchos
    //ordenar por mas reciente para listado
	public function comments(){
		return $this->hasMany('App\Comment')->orderBy('id', 'desc');
	}
