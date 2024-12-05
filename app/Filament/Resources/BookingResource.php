<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookingResource\Pages;
use App\Models\Booking;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Filament\Tables\Actions\Action;
use Barryvdh\DomPDF\Facade\Pdf;
use PhpParser\Node\Stmt\Label;

class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static ?string $navigationIcon = 'heroicon-o-bookmark-square';

    protected static ?string $navigationGroup = 'System Management';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('customer_name')
                            ->label('Customer Name')
                            ->required(),
                        TextInput::make('room')
                            ->label('Room')
                            ->required(),
                        DatePicker::make('check_in')
                            ->label('Check In')
                            ->required(),
                        DatePicker::make('check_out')
                            ->label('Check Out')
                            ->required(),

                        TextInput::make('guest')
                            ->label('Guest')
                            ->required()
                            ->numeric(),
                        TextInput::make('price_per_night')
                            ->label('Harga Per Malam')
                            ->required()
                            ->numeric()
                            ->prefix('Rp'),
                        TextInput::make(name: 'total_price')
                            ->label('Total Harga')
                            ->required()
                            ->numeric()
                            ->prefix('Rp'),
                        TextInput::make(name: 'rental')
                            ->label('Sewa Rental')
                            ->required(),
                        TextInput::make(name:'price_per_rental')
                            ->label('Harga Per Rental')
                            ->required()
                            ->numeric()
                            ->prefix('Rp'),
                        Select::make('status')
                            ->label('Status')
                            ->options([
                                'ongoing' => 'Ongoing',
                                'complete' => 'Complete',
                            ])
                            ->default('ongoing')
                            ->required(),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('customer_name')->sortable()->searchable()->label('Customer Name'),
                TextColumn::make('check_in')->sortable()->label('Check In'),
                TextColumn::make('check_out')->sortable()->label('Check Out'),
                TextColumn::make('room')->sortable()->label('Room'),
                TextColumn::make('guest')->sortable()->label('Guest'),
                TextColumn::make('price_per_night')
                    ->label('Harga Per Malam')
                    ->money('idr'),
                TextColumn::make('total_price')
                    ->label('Total Harga')
                    ->money('idr'),
                TextColumn::make('rental')
                    ->label('Sewa Rental'),
                TextColumn::make('price_per_rental')
                    ->label('Harga Per Rental')
                    ->money('idr'),
                BadgeColumn::make('status')
                    ->sortable()
                    ->label('Status')
                    ->colors([
                        'primary' => 'ongoing',
                        'success' => 'complete',
                    ])
                    ->tooltip(fn ($record) => $record->status ? 'Klik untuk ubah' : 'Klik untuk ubah')
                    ->action(function (Model $record) {
                        if ($record->status === 'ongoing') {
                            $record->status = 'complete';
                        } else {
                            $record->status = 'ongoing';
                        }
                        $record->save();
                    }),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\Action::make('printInvoice')
                    ->label('Cetak Invoice')
                    ->icon('heroicon-o-printer')
                    ->url(fn (Booking $record): string => route('booking.print-invoice', $record))
                    ->openUrlInNewTab(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ])
            ->headerActions([
                Action::make('cetakSemuaRekapan')
                    ->label('Cetak Semua Rekapan')
                    ->icon('heroicon-o-document-text')
                    ->action(fn () => self::cetakSemuaRekapanPemesanan()),
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
            'index' => Pages\ListBookings::route('/'),
            'create' => Pages\CreateBooking::route('/create'),
            'edit' => Pages\EditBooking::route('/{record}/edit'),
        ];
    }

    public static function cetakSemuaRekapanPemesanan()
    {
        $bookings = Booking::all();

        $pdf = Pdf::loadView('pdf.rekapan-pemesanan', ['bookings' => $bookings]);

        return response()->streamDownload(function () use ($pdf) {
            echo $pdf->output();
        }, 'rekapan-pemesanan.pdf');
    }
}
