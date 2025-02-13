<x-page title="Кастомные действия" :sectionMenu="$sectionMenu ?? null">

<x-p>
    По умолчанию в панели moonShine в таблице всего 2 действия над элементами - редактирование и удаление.
    Но также есть возможность добавить свои кастомные действия
</x-p>

<x-code language="php">
namespace Leeto\MoonShine\Resources;

use Leeto\MoonShine\Models\MoonshineUser;
use Leeto\MoonShine\ItemActions\ItemAction; // [tl! focus]

class PostResource extends Resource
{
    public static string $model = App\Models\Post::class;

    public static string $title = 'Статьи';
    //...

    public function itemActions(): array // [tl! focus:start]
    {
        return [
            ItemAction::make('Деактивация', function (Model $item) {
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

    <x-next href="{{ route('section', 'resources-bulk_actions') }}">Стили таблицы</x-next>

</x-page>
