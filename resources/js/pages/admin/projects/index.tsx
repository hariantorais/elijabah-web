import { Head } from '@inertiajs/react';
import React from 'react';
import { DataTable } from '@/components/ui/data-table';
import type { Project, Client, Service } from '@/types';
import { columns } from './columns';
import { CreateProjectModal } from './create';

interface Props {
    projects: Project[];
    clients: Client[];
    services: Service[];
}

export default function Project({ projects }: Props) {
    return (
        <div className="flex-1 space-y-4 p-8 pt-6">
            <Head title="Manajemen Proyek" />

            <div className="flex items-center justify-between">
                <div>
                    <h2 className="text-3xl font-bold tracking-tight">
                        Proyek
                    </h2>
                </div>
            </div>

            <CreateProjectModal />

            <div className="rounded-xl bg-card text-card-foreground">
                <DataTable columns={columns} data={projects} />
            </div>
        </div>
    );
}
