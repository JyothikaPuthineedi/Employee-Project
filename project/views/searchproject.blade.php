<form action="admin" method="POST">
    @csrf
    <div class="container" style="margin-top:50px">
        <h1>Employee Register</h1><hr>
        <table border=1>
            <thead>
                <tr>
                    <th scope="col">Project Id</th>
                    <th scope="col">Project Name</th> 
                </tr>
            </thead>
            <tbody>
            @foreach($empproject as $item)
           <tr>
                <td>{{$item['proj_id']}}</td>
                <td><a href={{"getprojectdetails/".$item['proj_id']}}>{{$item['proj_name']}}</a></td>
                 
           </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </form>