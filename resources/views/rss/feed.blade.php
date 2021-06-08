<?=
'<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL
?>
<rss version="2.0">
    <channel>
        <title><![CDATA[ PL_CMS ]]></title>
        <link><![CDATA[ https://localhost:8000/feed ]]></link>
        <description><![CDATA[ A CMS for programming languages ]]></description>
        <language>en</language>
        <pubDate>{{ now() }}</pubDate>

        @foreach($contents as $content)
            <item>
                <title><![CDATA[{{ $content->contentTitle }}]]></title>
                <link>{{ $content->contentTitle }}</link>
                <description><![CDATA[{!! $content->contentDesc !!}]]></description>
                <category>{{ $content->categoryId }}</category>
                <author><![CDATA[{{ $content->userId  }}]]></author>
                <guid>{{ $content->contentId }}</guid>
                <pubDate>{{ $content->created_at }}</pubDate>
            </item>
        @endforeach
    </channel>
</rss>