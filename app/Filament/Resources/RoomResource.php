<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RoomResource\Pages;
use App\Models\Room;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class RoomResource extends Resource
{
    protected static ?string $model = Room::class;

    protected static ?string $navigationIcon = 'heroicon-o-home-modern';

    protected static ?string $navigationGroup = 'System Management';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('no_room')
                            ->label('Room Number')
                            ->required()
                            ->unique(ignorable: fn ($record) => $record),
                        TextInput::make('type')
                            ->required()
                            ->maxLength(255),
                        Textarea::make('description')
                            ->nullable()
                            ->required(),
                        TextInput::make('area')
                            ->label('Area (m²)')
                            ->numeric()
                            ->required(),
                        TextInput::make('capacity')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('view')
                            ->required()
                            ->maxLength(255),
                        Textarea::make('features')
                            ->label('Room Features')
                            ->required(),
                        TextInput::make('price')
                            ->label('Price')
                            ->required()
                            ->numeric(),
                        FileUpload::make('images')
                            ->label('Room Image')
                            ->image()
                            ->disk('public')
                            ->directory('images/rooms')
                            ->visibility('public')
                            ->preserveFilenames(),
                        Toggle::make('availability')
                            ->label('Status')
                            ->default(true),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('no_room')->sortable()->searchable(),
                TextColumn::make('type')->sortable()->searchable(),
                TextColumn::make('area')->sortable(),
                TextColumn::make('capacity')->sortable(),
                TextColumn::make('view')->sortable(),
                TextColumn::make('price')->sortable(),
                BooleanColumn::make('availability')
                    ->label('Available')
                    ->trueIcon('heroicon-s-check-circle')
                    ->falseIcon('heroicon-s-x-circle')
                    ->trueColor('success')
                    ->falseColor('danger')
                    ->tooltip(fn ($record) => $record->availability ? 'Klik untuk ubah' : 'Klik untuk ubah')
                    ->action(function (Model $record) {
                        $record->availability = ! $record->availability;
                        $record->save();
                    }),
                ImageColumn::make('images')
                    ->label('Room Image')
                    ->disk('public'),
                TextColumn::make('created_at')->label('Created')->dateTime(),
            ])

            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    // public static function infolist(Infolist $infolist): Infolist
    // {
    //     return $infolist
    //         ->schema([
    //             Section::make('Room Info')
    //                 ->schema([
    //                     TextEntry::make('rooms.type')->label('Room Type'),
    //                     TextEntry::make('description')->label('Room Description'),
    //                 ]),
    //         ]);
    // }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRooms::route('/'),
            'create' => Pages\CreateRoom::route('/create'),
            'edit' => Pages\EditRoom::route('/{record}/edit'),
        ];
    }
}
