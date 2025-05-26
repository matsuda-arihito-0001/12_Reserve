<div>
    <h2>リアルタイム判定</h2>
    <table>
        <form wire:submit.prevent="register">
            <tr>
                <td>名前</td>
                <td><input type="text" class="rounded" wire:model="name">
                    @error('name')
                        <span style="font-size:.8rem" class="text-red-700 font-bold">※{{ $message }}</span>
                    @enderror
                </td>
            </tr>
            <tr>
                <td>メールアドレス</td>
                <td><input type="email" class="rounded" wire:model="email">
                    @error('email')
                        <span style="font-size:.8rem" class="text-red-700 font-bold">※{{ $message }}</span>
                    @enderror
                </td>
            </tr>
            <tr>
                <td>パスワード</td>
                <td><input type="password" class="rounded" wire:model="password">
                    @error('password')
                        <span style="font-size:.8rem" class="text-red-700 font-bold">※{{ $message }}</span>
                    @enderror
                </td>
            </tr>
            <tr>
                <td></td>
                <td><button class="border shadow rounded p-4 w-48">登録</button></td>
            </tr>
        </form>
    </table>
</div>
