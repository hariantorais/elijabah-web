export interface User {
    id: number;
    name: string;
    email: string;
    role: 'super_admin' | 'pm' | 'developer' | 'client';
}

export interface Task {
    id: number;
    project_id: number;
    assigned_to: number | null;
    title: string;
    description: string | null;
    status: 'todo' | 'in_progress' | 'in_review' | 'done';
    order_column: number;
    assignee?: User;
}

export interface Project {
    id: number;
    name: string;
    slug: string;
    description: string | null;
    status: string;
    total_value: string;
    deadline: string | null;
    tasks?: Task[];
}

export type PageProps<
    T extends Record<string, unknown> = Record<string, unknown>,
> = T & {
    auth: {
        user: User;
    };
};
