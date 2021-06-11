

@if (count($posts) > 0)
    <ul class="list-unstyled">
        @foreach ($posts as $post)
            <li class="media mb-3">
                {{-- 投稿の所有者のメールアドレスをもとにGravatarを取得して表示 --}}
                <!--<img class="mr-2 rounded" src="{ Gravatar::get$post->user->email, ['size' => 50]) }}" alt="">-->
                <div class="media-body">
                    <div>
                        <span class="text-muted">posted at {{ $post->created_at }}</span>
                    </div>
                <div class="card mb-4">
                 <div class="card-header">
                    調味料名: {{ $post->title }}
                 </div>
                 <div class="card-body">
                    {!! nl2br(e($post->content)) !!}
                 </div>
                 <div class="card-body">
                    <img src="{{ $post->image }}">
                    
                    @if (session('s3url'))
                   <img src="{{ session('s3url') }}">
                    @endif
                 </div>
                    <p class="card-text">
                   

                    @php
                    $data = [
                            'labels' => ['旨味', '甘味', '苦味', '酸味', '塩味'],
                            'datasets' => [
                                [
                                    'label' => '味グラフ',
                                    'data' => [$post->umami, $post->amami, $post->ngami, $post->sanmi, $post->enmi],
                                    'backgroundColor' =>  'rgba(255, 99, 132, 0.2)',
                                    'pointBackgroundColor' => 'rgb(255, 99, 132)',
                                    'pointBorderColor' => '#fff',
                                    'pointHoverBackgroundColor' => '#fff',
                                    'pointHoverBorderColor' => 'rgb(255, 99, 132)'
                                ],
                            ]
                    ];
                    
                    @endphp
                    
                    <canvas id="myChart-{{ $post->id }}" width="300" height="300"></canvas>
                    <script>
                        var ctx = document.getElementById("myChart-{{ $post->id }}");
                        var myRadarChart = new Chart(ctx, {
                            type: 'radar',
                            data: <?php echo json_encode($data); ?>,
                            options: {
                           　　　responsive: true,
                           　　　maintainAspectRatio: false,
                                scale: {
                                    pointLabels: {
                                        fontSize: 18, 
                                        },
                                    ticks: {
                                        min: 0,
                                        max: 5,
                                        stepSize: 1,
                                        }
                                    },
                                elements: {
                                    line: {
                                        borderWidth: 3
                                    }
                                }
                            }
                        });
                    </script>
                    
                     </p>
                
                    <div>
                        @if (Auth::id() == $post->user_id)
                            {{-- 投稿削除ボタンのフォーム --}}
                            {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        @endif
                    </div>
        @endforeach              
                </div>
                </div>
            </li>
    </ul>
    {{-- ページネーションのリンク --}}
    {{ $posts->links() }}
@endif