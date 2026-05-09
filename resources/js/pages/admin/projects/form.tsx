import { useForm } from '@inertiajs/react';
import { Loader2 } from 'lucide-react';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';

interface ProjectFormProps {
    initialData?: { title: string; final_price: string; deadline: string };
    onSuccess: () => void;
}

export function ProjectForm({ initialData, onSuccess }: ProjectFormProps) {
    const { data, setData, post, processing, errors } = useForm({
        title: initialData?.title || '',
        final_price: initialData?.final_price || '',
        deadline: initialData?.deadline || '',
    });

    const handleSubmit = (e: React.FormEvent) => {
        e.preventDefault();
        post('/admin/projects', {
            onSuccess: () => onSuccess(),
        });
    };

    return (
        <form onSubmit={handleSubmit} className="grid gap-4 py-4">
            <div className="grid gap-2">
                <Label htmlFor="title">Nama Proyek</Label>
                <Input
                    id="title"
                    value={data.title}
                    onChange={(e) => setData('title', e.target.value)}
                    placeholder="E-commerce Website"
                />
                {errors.title && (
                    <p className="text-xs text-destructive">{errors.title}</p>
                )}
            </div>

            <div className="grid gap-2">
                <Label htmlFor="price">Harga Final (IDR)</Label>
                <Input
                    id="price"
                    type="number"
                    value={data.final_price}
                    onChange={(e) => setData('final_price', e.target.value)}
                />
            </div>

            <div className="grid gap-2">
                <Label htmlFor="deadline">Deadline</Label>
                <Input
                    id="deadline"
                    type="date"
                    value={data.deadline}
                    onChange={(e) => setData('deadline', e.target.value)}
                />
            </div>

            <Button type="submit" disabled={processing} className="mt-4 w-full">
                {processing ? (
                    <Loader2 className="mr-2 h-4 w-4 animate-spin" />
                ) : (
                    'Simpan Data'
                )}
            </Button>
        </form>
    );
}
