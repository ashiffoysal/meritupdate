 <div class="asif-tutor col-lg-12 row">
                                                    <!--  -->
                                                    <div class="content">
                                                        
                                                         <span class="badge bg-label-info">Subject Summary</span>
                                                    </div>
                                                    <table class="table table-borderless">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Level</th>
                                                                <th scope="col">Subject</th>
                                                                  <th scope="col">MANAGE</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                @foreach($alldata as $data)
                                                @php
                                                    $sub=App\Models\TutoringSubject::where('id',$data->subject_id)->select(['id','name','level_name'])->first();
                                                @endphp
                                                            <tr>
                                                                <td>{{ $sub->level_name }}</td>
                                                                <td>{{ $sub->name }}</td>
                                                                <td>
                                        <a id="{{ $data->id }}" onclick="functiondel(this)" href="#">Delete</a>
                                                                </td>
                                                                
                                                            </tr>
                                                            
                                                            @endforeach
                                                        
                                                           
                                                        </tbody>
                                                    </table>
                                                </div>
<script>
function functiondel(el){
    var bid=el.id;
     $.ajax({
         url: "{{  url('/get/tutorsubject/delete/') }}"+'/'+bid,
         type:"GET",
         data:'json',
         success:function(data) {
             console.log(data);
             getallsubject();
          alert("Delete Success");
           
            

        }
     });
}
    
</script>