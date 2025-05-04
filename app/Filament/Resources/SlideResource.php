<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SlideResource\Pages;
use App\Filament\Resources\SlideResource\RelationManagers;
use App\Models\Slide;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;

class SlideResource extends Resource
{
    protected static ?string $model = Slide::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->required()->label('Überschrift'),
                TextInput::make('highlight_text')->label('Hervorhebung'),
                Textarea::make('subtitle')->label('Untertitel'),
                Grid::make(2)->schema([
                    Select::make('gradient_from')
                        ->options([
                            'purple-400'=>'Lila','blue-400'=>'Blau','lime-300'=>'Lime'
                        ])->label('Gradient From'),
                    Select::make('gradient_to')
                        ->options([
                            'purple-400'=>'Lila','blue-400'=>'Blau','lime-300'=>'Lime'
                        ])->label('Gradient To'),
                ]),
                Select::make('highlight_color')
                    ->options([
                        'purple-400'=>'Lila','blue-400'=>'Blau','lime-300'=>'Lime'
                    ])->label('Highlight-Farbe'),

                Grid::make(2)->schema([
                    TextInput::make('button1_text')
                        ->label('Button 1 Text')
                        ->required(),              // ← Text ebenfalls Pflicht, wenn du willst

                    TextInput::make('button1_link')
                        ->label('Button 1 Link')
                        ->url()
                        ->required(),              // ← Link jetzt Pflicht
                ]),

                Grid::make(2)->schema([
                    TextInput::make('button2_text')
                        ->label('Button 2 Text')
                        ->required(),              // ← Text ebenfalls Pflicht, wenn du willst

                    TextInput::make('button1_link')
                        ->label('Button 2 Link')
                        ->url()
                        ->required(),              // ← Link jetzt Pflicht
                ]),
                Toggle::make('media_type')
                    ->label('Medientyp (Bild/Video)')
                    ->inline(false)
                    ->onIcon('heroicon-o-camera')
                    ->offIcon('heroicon-o-video-camera'),

                FileUpload::make('background_media')
                    ->label('Hintergrund-Medien')
                    ->directory('slides')
                    ->visibility('public'),

                TextInput::make('sort_order')
                    ->label('Sortierung')
                    ->numeric(),

                Toggle::make('active')
                    ->label('Aktiv')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->sortable(),
                Tables\Columns\TextColumn::make('sort_order')->label('Reihenfolge')->sortable(),
                Tables\Columns\IconColumn::make('active')->boolean(),
            ])
            ->defaultSort('sort_order')
            ->reorderable('sort_order')
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSlides::route('/'),
            'create' => Pages\CreateSlide::route('/create'),
            'edit' => Pages\EditSlide::route('/{record}/edit'),
        ];
    }
}
