<form action="{{route("brief.store")}}" method="post">
    @csrf
     nom brief<input name="Nom" type="text">
     DL<input name="Date_livraison" type="date">
     DR<input name="Date_recuperation" type="date">
    <button>ajouter</button>
</form>


<a href="{{route("brief.index")}}"><button>return</button></a>
