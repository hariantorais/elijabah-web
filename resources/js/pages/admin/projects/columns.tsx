import type { ColumnDef } from '@tanstack/react-table';
import { MoreHorizontal, Pencil, Eye, Trash2, Calendar } from 'lucide-react';
import { Badge } from '@/components/ui/badge';
import { Button } from '@/components/ui/button';
import {
    DropdownMenu,
    DropdownMenuContent,
    DropdownMenuItem,
    DropdownMenuSeparator,
    DropdownMenuTrigger,
} from '@/components/ui/dropdown-menu';
import type { Project } from '@/types';

// Helper untuk warna status badge
const statusVariants: Record<
    Project['status'],
    'default' | 'secondary' | 'outline' | 'destructive'
> = {
    pending: 'outline',
    on_progress: 'default',
    review: 'secondary',
    completed: 'default', // Anda bisa kustomisasi warna hijau di globals.css jika perlu
    cancelled: 'destructive',
};

export const columns: ColumnDef<Project>[] = [
    {
        accessorKey: 'title',
        header: 'Nama Proyek',
        cell: ({ row }) => (
            <div className="flex flex-col">
                <span className="font-bold">{row.getValue('title')}</span>
                <span className="text-xs text-muted-foreground">
                    ID: {row.original.id.substring(0, 8)}
                </span>
            </div>
        ),
    },
    {
        accessorKey: 'client',
        header: 'Klien',
        cell: ({ row }) => {
            const client = row.original.client;

            return (
                <div className="flex flex-col">
                    <span className="font-medium">
                        {client?.name || 'Tanpa Nama'}
                    </span>
                    <span className="text-xs text-muted-foreground">
                        {client?.company_name || '-'}
                    </span>
                </div>
            );
        },
    },
    {
        accessorKey: 'status',
        header: 'Status',
        cell: ({ row }) => {
            const status = row.getValue('status') as Project['status'];

            return (
                <Badge variant={statusVariants[status]} className="capitalize">
                    {status.replace('_', ' ')}
                </Badge>
            );
        },
    },
    {
        accessorKey: 'deadline',
        header: 'Deadline',
        cell: ({ row }) => {
            const date = row.original.deadline;

            if (!date) {
                return <span className="text-muted-foreground">-</span>;
            }

            return (
                <div className="flex items-center gap-2 text-sm text-slate-700">
                    <Calendar className="h-3.5 w-3.5 text-muted-foreground" />
                    {new Date(date).toLocaleDateString('id-ID', {
                        day: 'numeric',
                        month: 'short',
                        year: 'numeric',
                    })}
                </div>
            );
        },
    },
    {
        accessorKey: 'formatted_price',
        header: () => <div className="text-right">Nilai Proyek</div>,
        cell: ({ row }) => {
            return (
                <div className="text-right font-mono font-medium">
                    {row.original.formatted_price}
                </div>
            );
        },
    },
    {
        id: 'actions',
        cell: ({ row }) => {
            const project = row.original;

            return (
                <div className="text-right">
                    <DropdownMenu>
                        <DropdownMenuTrigger asChild>
                            <Button variant="ghost" className="h-8 w-8 p-0">
                                <span className="sr-only">Buka menu</span>
                                <MoreHorizontal className="h-4 w-4" />
                            </Button>
                        </DropdownMenuTrigger>
                        <DropdownMenuContent align="end" className="w-40">
                            <DropdownMenuItem
                                onClick={() =>
                                    console.log('Detail', project.id)
                                }
                            >
                                <Eye className="mr-2 h-4 w-4" /> Detail
                            </DropdownMenuItem>
                            <DropdownMenuItem
                                onClick={() => console.log('Edit', project.id)}
                            >
                                <Pencil className="mr-2 h-4 w-4" /> Edit
                            </DropdownMenuItem>
                            <DropdownMenuSeparator />
                            <DropdownMenuItem
                                className="text-destructive focus:bg-destructive focus:text-destructive-foreground"
                                onClick={() => console.log('Hapus', project.id)}
                            >
                                <Trash2 className="mr-2 h-4 w-4" /> Hapus
                            </DropdownMenuItem>
                        </DropdownMenuContent>
                    </DropdownMenu>
                </div>
            );
        },
    },
];
