<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Lista permisji</h4>
                    </div>
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="">
                                    <i class="icofont icofont-home"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="page-body">

                    <div class="card">
                        <div class="card-header">
                            <h5>Nowy permisja</h5>
                            <span>Tutaj wyświetly jest formularz dzięki któremu możesz łatwo i bezpiecznie edytować dany rekord.</span>
                            <div class="card-header-right">
                                <i class="icofont icofont-rounded-down"></i>
                                <i class="icofont icofont-refresh"></i>
                                <i class="icofont icofont-close-circled"></i>
                            </div>
                        </div>
                        <div class="card-block">
                            <div id="new_errors"></div>
                            {!! Form::open(['class'=>'new','url'=>route('admin.permissions.create')]) !!}
                            <div class="form-group row col-md-12">
                                {!! Form::label('name','Nazwa:',['class'=>'col-form-label']) !!}
                                <div class="col-sm-10 col-lg-3">
                                    {!! Form::text('name',null,['class'=>'form-control','required']) !!}
                                </div>
                                {!! Form::label('group','Grupa:',['class'=>'col-form-label']) !!}
                                <div class="col-sm-10 col-lg-3">
                                    {!! Form::select('group',$groups,null,['class'=>'form-control','required']) !!}
                                </div>
                            </div>
                            <div class="form-group row col-md-12">
                                {!! Form::submit('Stwórz',['class'=>'btn btn-primary']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="card edit" style="display: none;">
                        <div class="card-header">
                            <h5>Szybka edycja</h5>
                            <span>Tutaj wyświetlana jest szybka edycja możesz łatwo i bezpiecznie edytować dany rekord.</span>
                            <div class="card-header-right">
                                <i class="icofont icofont-rounded-down"></i>
                                <i class="icofont icofont-refresh"></i>
                                <i class="icofont icofont-close-circled"></i>
                            </div>
                        </div>
                        <div class="card-block">
                            <div id="edit_errors"></div>
                            {!! Form::open(['class'=>'edit','url'=>route('admin.permissions.edit',['id'=>null])]) !!}
                            <div class="form-group row col-md-12">
                                {!! Form::label('name','Nazwa:',['class'=>'col-form-label']) !!}
                                <div class="col-sm-10 col-lg-3">
                                    {!! Form::text('name',null,['class'=>'form-control','required']) !!}
                                </div>
                                {!! Form::label('group','Grupa:',['class'=>'col-form-label']) !!}
                                <div class="col-sm-10 col-lg-3">
                                    {!! Form::select('group',$groups,null,['class'=>'form-control','required']) !!}
                                </div>
                            </div>


                            <div class="form-group row col-md-12">
                                {!! Form::submit('Edytuj',['class'=>'btn btn-primary']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5>Lista Permisji</h5>
                            <span>Tutaj wyświetlana jest lista permisji za pomocą tego narzędzia możesz ich edytować, usuwać lub dodawać.</span>
                            <div class="card-header-right">
                                <i class="icofont icofont-rounded-down"></i>
                                <i class="icofont icofont-refresh"></i>
                                <i class="icofont icofont-close-circled"></i>
                            </div>
                        </div>
                        <div class="card-block">
                            <div id="edit_errors"></div>
                            <div class="table-responsive dt-responsive">
                                <div class="col-xs-12 col-sm-12">
                                    <table id="datatable" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="dom-jqry_info">
                                        <thead>
                                        <td>ID</td>
                                        <td>Nazwa</td>
                                        <td>Grupa</td>
                                        <td>Zarządzaj</td>
                                        </thead>
                                    </table>
                                    <script>
                                        $(document).ready(function () {
                                            window.datatable = $('#datatable').DataTable({
                                                columns: [
                                                    {data: 'id', "sClass": 'id'},
                                                    {data: 'name', "sClass": 'name'},
                                                    {data: 'group', "sClass": 'group'},
                                                    {
                                                        name: "buttons",
                                                        "targets": -1,
                                                        "data": null,
                                                        "defaultContent": '<div class="btn-group " role="group" data-toggle="tooltip" data-placement="top" title="" data-original-title=".btn-xlg">\n' +
                                                        '<div class="btn-group dropdown-split-primary">\n' +
                                                        '<button type="button" class="btn btn-mini btn-primary"><i class="fa fa-external-link-square"></i>Więcej</button>\n' +
                                                        '<button type="button" class="btn btn-mini btn-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">\n' +
                                                        '<span class="sr-only">Toggle primary</span>\n' +
                                                        '</button>\n' +
                                                        '<div class="dropdown-menu">\n' +
                                                        '<a class="dropdown-item waves-effect waves-light" href="#">Action</a>\n' +
                                                        '<a class="dropdown-item waves-effect waves-light" href="#">Another action</a>\n' +
                                                        '<a class="dropdown-item waves-effect waves-light" href="#">Something else here</a>\n' +
                                                        '<div class="dropdown-divider"></div>\n' +
                                                        '<a class="dropdown-item waves-effect waves-light" href="#">Separated link</a>\n' +
                                                        '</div>\n' +
                                                        '</div>' +
                                                        '<button id="edit" class="btn btn-mini btn-warning"><i class="fa fa-pencil-square"></i>Edytuj</button>\n' +
                                                        '<button id="remove" class="btn  btn-mini btn-danger"><i class="fa fa-minus-square"></i>Usuń</button>\n' +
                                                        '</div>'
                                                    }
                                                ],
                                                "autoWidth": true,
                                                'responsive': true,
                                                "processing": true,
                                                "serverSide": true,
                                                rowId: 'id',
                                                ajax: "{{route('admin.datatable.permissions')}}",

                                            });
                                            eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('p($(\'B.C\').d(\'I\')){9 R=$(\'B.C\').d(\'I\')+\'/\'}W{9 R=1h.1e+\'/\'}$(\'#J\').12(\'11\',\'4#C\',8(){$(\'6.C\').1i();$(\'B.C\').d({\'A\':$(f).N(\'m\').d(\'A\'),\'I\':R+$(f).N(\'m\').d(\'A\')});9 m=$(f).N(\'m\');$(\'B.C\').L(\':17.B-1f\').K(8(){9 c=m.L(\'P.\'+$(f).d(\'A\')).c();p(c.1d(\'[\')>-1){$(\'.1j[y="1b[]"\').O(M.U(c)).1c(\'1g\')}W{p($(f).d(\'14\')){9 y=$(f).d(\'y\');$(f).O(m.L(\'P.\'+y).c());$.z({Q:$(f).d(\'14\'),a:\'15\',3:"1l="+m.L(\'P.\'+y).c(),b:8(3){$.K(3,8(1n,19){$("17:h[y="+y+"]").O(19.3)})},g:8(3){}})}W{$(f).O(m.L(\'P.\'+$(f).d(\'y\')).c())}}})});$(\'#J\').12(\'11\',\'4#1m\',8(){9 A=$(f).N(\'m\').d(\'A\');$.z({Q:R+A,a:\'15\',b:8(3){$(\'#x\').D();p(3[\'g\']){$(\'#x\').j(\'   <6 5="2 2-k 2-o-w 2-F 2-v">\\n\'+\'                                        <4 a="4" 5="q" 3-r="2" u-h="s">×</4>\\n\'+\'                                        <i 5="7 7-E t"></i>\'+3[\'g\']+\' </6>\')}p(3[\'b\']){$(\'#x\').j(\'   <6 5="2 2-k 2-o-w 2-b 2-v">\\n\'+\'                                    <4 a="4" 5="q" 3-r="2" u-h="s">×</4>\\n\'+\'                                    <i 5="7 7-V t"></i> \'+3[\'b\']+\' </6>\')}Y.J.z.Z()},g:8(3){$(\'#x\').D();9 l=M.U(3.X);9 i=0;$.K(l[\'x\'],8(10,c){i++;$(\'#x\').j(\'   <6 5="2 2-k 2-o-w 2-F 2-v">\\n\'+\'                                        <4 a="4" 5="q" 3-r="2" u-h="s">×</4>\\n\'+\'                                        <i 5="7 7-E t"></i>\'+c+\' </6>\')})}})});9 S=$("B.C");S.13(8(e){e.16();$.z({Q:S.d(\'I\'),a:\'1a\',3:S.18(),b:8(3){$(\'#G\').D();p(3[\'g\']){$(\'#G\').j(\'   <6 5="2 2-k 2-o-w 2-F 2-v">\\n\'+\'                                        <4 a="4" 5="q" 3-r="2" u-h="s">×</4>\\n\'+\'                                        <i 5="7 7-E t"></i>\'+3[\'g\']+\' </6>\')}p(3[\'b\']){$(\'#G\').j(\'   <6 5="2 2-k 2-o-w 2-b 2-v">\\n\'+\'                                    <4 a="4" 5="q" 3-r="2" u-h="s">×</4>\\n\'+\'                                    <i 5="7 7-V t"></i> \'+3[\'b\']+\' </6>\')}Y.J.z.Z()},g:8(3){$(\'#G\').D();9 l=M.U(3.X);9 i=0;$.K(l[\'x\'],8(10,c){i++;$(\'#G\').j(\'   <6 5="2 2-k 2-o-w 2-F 2-v">\\n\'+\'                                        <4 a="4" 5="q" 3-r="2" u-h="s">×</4>\\n\'+\'                                        <i 5="7 7-E t"></i>\'+c+\' </6>\')})}})});9 T=$("B.1k");T.13(8(e){e.16();$.z({Q:T.d(\'I\'),a:\'1a\',3:T.18(),b:8(3){$(\'#H\').D();p(3[\'g\']){$(\'#H\').j(\'   <6 5="2 2-k 2-o-w 2-F 2-v">\\n\'+\'                                        <4 a="4" 5="q" 3-r="2" u-h="s">×</4>\\n\'+\'                                        <i 5="7 7-E t"></i>\'+3[\'g\']+\' </6>\')}p(3[\'b\']){$(\'#H\').j(\'   <6 5="2 2-k 2-o-w 2-b 2-v">\\n\'+\'                                    <4 a="4" 5="q" 3-r="2" u-h="s">×</4>\\n\'+\'                                    <i 5="7 7-V t"></i> \'+3[\'b\']+\' </6>\')}Y.J.z.Z()},g:8(3){$(\'#H\').D();9 l=M.U(3.X);9 i=0;$.K(l[\'x\'],8(10,c){i++;$(\'#H\').j(\'   <6 5="2 2-k 2-o-w 2-F 2-v">\\n\'+\'                                        <4 a="4" 5="q" 3-r="2" u-h="s">×</4>\\n\'+\'                                        <i 5="7 7-E t"></i>\'+c+\' </6>\')})}})});',62,86,'||alert|data|button|class|div|fa|function|var|type|success|text|attr||this|error|hidden||prepend|sm||tr||border|if|close|dismiss|true|pr10|aria|dismissable|left|errors|name|ajax|id|form|edit|empty|info|danger|edit_errors|new_errors|action|datatable|each|find|JSON|parents|val|td|url|loc|EDIT|NEW|parse|check|else|responseText|window|reload|heading|click|on|submit|route|GET|preventDefault|input|serialize|element|POST|genrs|trigger|indexOf|href|control|change|location|show|select2|new|query|remove|index'.split('|'),0,{}))
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>