import { Plus } from 'lucide-react';
import { useState } from 'react';
import { Button } from '@/components/ui/button';
import {
    Dialog,
    DialogContent,
    DialogHeader,
    DialogTitle,
    DialogTrigger,
} from '@/components/ui/dialog';
import { ProjectForm } from './form';

export function CreateProjectModal() {
    const [open, setOpen] = useState(false);

    return (
        <Dialog open={open} onOpenChange={setOpen}>
            <DialogTrigger asChild>
                <Button>
                    <Plus className="mr-2 h-4 w-4" /> Tambah Proyek
                </Button>
            </DialogTrigger>
            <DialogContent className="sm:max-w-106">
                <DialogHeader>
                    <DialogTitle>Tambah Proyek Baru</DialogTitle>
                </DialogHeader>
                <ProjectForm onSuccess={() => setOpen(false)} />
            </DialogContent>
        </Dialog>
    );
}
