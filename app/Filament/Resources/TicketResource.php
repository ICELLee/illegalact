<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TicketResource\Pages;
use App\Filament\Resources\TicketResource\RelationManagers;
use App\Models\Ticket;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TicketResource extends Resource
{
    protected static ?string $model = Ticket::class;
    protected static ?string $navigationIcon = 'heroicon-o-ticket';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Ticket Information')
                    ->schema([
                        Forms\Components\TextInput::make('ticket_number')
                            ->required()
                            ->maxLength(255)
                            ->disabled(),
                        Forms\Components\Select::make('subject')
                            ->options([
                                'General Inquiry' => 'General Inquiry',
                                'Ticket' => 'Ticket',
                                'Other' => 'Other'
                            ])
                            ->required(),
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('email')
                            ->email()
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('age')
                            ->numeric()
                            ->required(),
                    ])->columns(2),

                Forms\Components\Section::make('Event Details')
                    ->schema([
                        Forms\Components\TextInput::make('event')
                            ->maxLength(255),
                        Forms\Components\DatePicker::make('event_date'),
                        Forms\Components\TimePicker::make('event_time'),
                        Forms\Components\TextInput::make('djs')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('location')
                            ->maxLength(255),
                    ])->columns(2)
                    ->hidden(fn ($record) => $record?->subject !== 'Ticket'),

                Forms\Components\Section::make('Payment & Response')
                    ->schema([
                        Forms\Components\Select::make('payment_status')
                            ->options([
                                'pending' => 'Pending',
                                'paid' => 'Paid',
                                'cancelled' => 'Cancelled'
                            ])
                            ->required(),
                        Forms\Components\Select::make('payment_method')
                            ->options([
                                'bank_transfer' => 'Bank Transfer',
                                'paypal' => 'PayPal',
                                'credit_card' => 'Credit Card',
                                'crypto' => 'Crypto'
                            ]),
                        Forms\Components\RichEditor::make('admin_reply')
                            ->columnSpanFull(),
                    ])->columns(2),

                Forms\Components\Section::make('Message')
                    ->schema([
                        Forms\Components\Textarea::make('message')
                            ->required()
                            ->columnSpanFull(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('ticket_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('subject')
                    ->searchable(),
                Tables\Columns\TextColumn::make('payment_status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'pending' => 'warning',
                        'paid' => 'success',
                        'cancelled' => 'danger',
                    }),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('subject')
                    ->options([
                        'General Inquiry' => 'General Inquiry',
                        'Ticket' => 'Ticket',
                        'Other' => 'Other'
                    ]),
                Tables\Filters\SelectFilter::make('payment_status')
                    ->options([
                        'pending' => 'Pending',
                        'paid' => 'Paid',
                        'cancelled' => 'Cancelled'
                    ]),
            ])
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTickets::route('/'),
            'create' => Pages\CreateTicket::route('/create'),
            'edit' => Pages\EditTicket::route('/{record}/edit'),
        ];
    }
}
