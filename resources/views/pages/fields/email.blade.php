<x-page title="E-mail">

<x-p>
    Все тоже самое как и "Текстовое поле", меняется только input type = email
</x-p>

<x-code language="php">
use Leeto\MoonShine\Fields\Email;

Email::make('E-mail', 'email')
</x-code>

<x-next href="{{ route('section', 'fields-phone') }}">Телефон</x-next>

</x-page>



