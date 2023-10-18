<span>
    @if ($name == 'apresentation')
        {!! $content['apresentation'] !!}
    @elseif ($name == 'content1')
        {!! $content['content1'] !!}
    @elseif ($name == 'content2')
        {!! $content['content2'] !!}
    @elseif ($name == 'ask')
        {!! $content['ask'] !!}
    @elseif ($name == 'curriculum')
        {!! $content['curriculum'] !!}
    @else
        <p>Conteúdo não encontrado.</p>
    @endif
</span>