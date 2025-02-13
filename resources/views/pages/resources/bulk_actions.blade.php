<x-page title="Массовые действия" :sectionMenu="$sectionMenu ?? null">

<x-p>
    По умолчанию в панели moonShine в таблице всего 1 массовое действие над элементами - удаление.
    Но также есть возможность добавить свои кастомные массовые действия
</x-p>

<x-code language="php">
namespace Leeto\MoonShine\Resources;

use Leeto\MoonShine\Models\MoonshineUser;
use Leeto\MoonShine\BulkActions\BulkAction; // [tl! focus]

class PostResource extends Resource
{
    public static string $model = App\Models\Post::class;

    public static string $title = 'Статьи';
    //...

    public function bulkActions(): array // [tl! focus:start]
    {
        return [
            BulkAction::make('Деактивация', function (Model $item) {
                $item->update(['active' => false]);
            }, 'Деактивирован')->icon('app')
        ];
    } // [tl! focus:end]

    //...
}
</x-code>

<p>
    Первый аргумент - Наименование экшена,
    Второй аргумент callback с параметром текущего элемента,
    Третий аргумент - сообщение, которое отобразится после выполнения экшена
</p>

    <x-next href="{{ route('section', 'resources-table_styles') }}">Стили таблицы</x-next>

</x-page>
